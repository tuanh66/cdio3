<?php

use App\Http\Controllers\NhanVienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Admin





Route::get('/admin/nhan-vien/data', [NhanVienController::class, 'getData']);
Route::post('admin/create', [NhanVienController::class, 'store']);
Route::post('admin/update', [NhanVienController::class, 'update']);
Route::post('admin/delete', [NhanVienController::class, 'destroy']);
