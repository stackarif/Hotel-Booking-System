<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Helpers\Export as HelpersExport;

Route::get('export', function(){
    return [
        'success' => true,
        'path' => (new HelpersExport())
        ->setHeaders([
            'id',
            'name',
            'email',
            'password',
            'status',
            'created_at',
            'updated_at'
        ])
        ->exportFromArray(User::all()->toArray())
    ];
})->name('export');

Route::get('export/download', function(Request $request){
    if($request->has('download')) {
        $file = storage_path('app/'.session()->get('time').'.csv');
        return response()->download($file);
    }
})->name('export.download');