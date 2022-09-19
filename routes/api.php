<?php

use App\Helpers\Import;
use App\Jobs\UserBulkUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Route;

Route::post('upload', function(Request $request, Import $import){
    $model = UserBulkUpload::class;
    $import->import($request,$model);
    
    return response()->json(['success'=>'User imported successfully']);
})->name('import.user');

Route::get('batch', function(){
    $batchId = request('id');
    
    return Bus::findBatch($batchId);
});

Route::get('batch/in-progress', function(){
    $batches = DB::table('job_batches')->where('pending_jobs', '>', 0)->get();
    if (count($batches) > 0) {
        return Bus::findBatch($batches[0]->id);
    }

    return [];
});