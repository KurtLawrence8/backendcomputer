<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ComputerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('computer', [ComputerController::class, 'index']);
Route::get('computer/{id}', [ComputerController::class, 'show']);
Route::post('computer', [ComputerController::class, 'store']);
Route::put('computer/{id}', [ComputerController::class, 'update']);
Route::delete('computer/{id}', [ComputerController::class, 'destroy']);
Route::post('computer/search', [ComputerController::class, 'search']);

