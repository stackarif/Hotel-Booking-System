<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\Bus;

class Import 
{
    public function import($request, $model)
    {
        if($request->has('csv')) {
            $csv    = file($request->csv);
            $chunks = array_chunk($csv,1000);
            $header = [];
            $batch  = Bus::batch([])->dispatch();

            foreach ($chunks as $key => $chunk) {
            $data = array_map('str_getcsv', $chunk);
                if($key == 0){
                    $header = $data[0];
                    unset($data[0]);
                }
                $batch->add(new $model($data, $header));
            }
            return $batch;
        }
        return 'please upload csv file';
    }
}