<?php

use App\Http\Controllers\vieclamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//admin
Route::get('vieclam', [vieclamController::class, 'vieclam']);
Route::post('add-vieclam',[vieclamController::class,'addvieclam']);
Route::post('edit-vieclam',[vieclamController::class,'editvieclam']);
Route::post('delete-vieclam',[vieclamController::class,'delvieclam']);
//end admin
