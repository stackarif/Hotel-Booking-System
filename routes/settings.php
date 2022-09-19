<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\SettingsController;

Route::post('theme/update',[ThemeController::class,'store'])
    ->name('theme.update')
    ->middleware('auth');

Route::get('settings',[SettingsController::class,'index'])
->name('settings')
->middleware('auth');
Route::post('settings',[SettingsController::class,'store'])
    ->name('settings.store')
    ->middleware('auth');
Route::patch('settings',[SettingsController::class,'update'])
    ->name('settings')
    ->middleware('auth');

Route::get('cache',[SettingsController::class,'cache'])
    ->name('cache')
    ->middleware('auth');

Route::get('change/password',[SettingsController::class,'updatePasswordForm'])
    ->name('update.password')
    ->middleware('auth');
Route::post('change/password',[SettingsController::class,'updatePassword'])
    ->middleware('auth');;