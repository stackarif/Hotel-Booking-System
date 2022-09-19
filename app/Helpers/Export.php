<?php 

namespace App\Helpers;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Export
{
    protected Builder $query;
    protected array $data;
    protected string $zipFileName;
    protected string $fileName;
    public int $chunkSize;
    protected Filesystem $storage;
    protected int $oldFilesDueDays = 1;
    public array $headers;
    protected mixed $file;

    public function exportFromQuery(?Builder $query = null): StreamedResponse
    {
        $this->query = $query;
        throw_if(!$this->query, new \Exception('Query has not been set.'));
        throw_if(empty($this->headers), new \Exception('Headers cannot be empty.'));

        $this->setDefaults();

        $this->openFile();

        $this->query->chunk($this->chunkSize, fn ($records) => $this->putToCSV($records));

        return $this->getDownloadStream();
    }

    public function exportFromArray(?array $data = []): StreamedResponse
    {
        $this->data = $data;
        throw_if(empty($this->data), new \Exception('Data cannot be empty.'));
        throw_if(empty($this->headers), new \Exception('Headers cannot be empty.'));

        $this->setDefaults();

        $this->openFile();
      
        $this->putToCSV($this->data);

        return $this->getDownloadStream();
    }

    public function putToCSV($iterableData)
    {
        foreach ($iterableData as $row) {
            $toArray = json_decode(json_encode($row), true);
            $res     = [];
            foreach ($this->headers as $key => $value) {
                $res[$key] = data_get($toArray, $value);
            }
            $res = array_filter($res, fn ($item) => !is_array($item));
            
            fputcsv($this->file, $res);
        }
    }

    public function getDownloadStream()
    {
        fclose($this->file);
        $this->deleteOldFiles();
        return $this->storage->download($this->file);
    }

    public function deleteOldFiles()
    {   
        foreach ($this->storage->allFiles() as $old_file) {
            if($old_file == session()->get('time').'.csv') continue;
            $this->storage->delete($old_file);
        }
    }

    public function setDefaults()
    {   
        session()->put('time',time());
        $this->fileName = session()->get('time') . '.csv';
        $this->chunkSize = 500;
        $this->storage = $this->storage ?? app('filesystem')->disk(config('filesystems.default'));

        return $this;
    }

    public function openFile()
    {
        $this->file = fopen($this->storage->path("$this->fileName"), 'a+');
        fputcsv($this->file, $this->headers);
        return $this->file;
    }

    public function setQuery(Builder $query)
    {
        $this->query = $query;
        return $this;
    }

    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function setChunkSize(int $chunkSize)
    {
        $this->chunkSize = $chunkSize;
        return $this;
    }
}