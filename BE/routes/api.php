<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\QuanTriVienController;
use App\Http\Controllers\QuyDinhController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Admin

Route::get('/admin/profile', [NhanVienController::class, 'profile']);
Route::get('/admin/check-token', [NhanVienController::class, 'checkToken']);
Route::post('/admin/dang-nhap', [NhanVienController::class, 'login']);
Route::post('/admin/doi-mat-khau', [NhanVienController::class, 'doiMatKhau']);
Route::post('/admin/doi-user', [NhanVienController::class, 'doiUser']);

Route::get('/admin/nhan-vien/data', [NhanVienController::class, 'getData']);
Route::post('/admin/nhan-vien/create', [NhanVienController::class, 'store']);
Route::post('/admin/nhan-vien/update', [NhanVienController::class, 'update']);
Route::post('/admin/nhan-vien/delete', [NhanVienController::class, 'destroy']);

Route::get('/client/profile', [KhachHangController::class, 'profile']);
Route::get('/client/check-token', [KhachHangController::class, 'checkToken']);
Route::post('/client/dang-nhap', [KhachHangController::class, 'login']);
Route::post('/client/doi-mat-khau', [KhachHangController::class, 'doiMatKhau']);
Route::post('/client/doi-user', [KhachHangController::class, 'doiUser']);

Route::get('/admin/khach-hang/data', [KhachHangController::class, 'getData']);
Route::post('/admin/khach-hang/create', [KhachHangController::class, 'store']);
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update']);
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy']);

route::get('/admin/quy-dinh/data',[QuyDinhController::class,'getdata']);
route::post('/admin/quy-dinh/create',[QuyDinhController::class,'store']);
route::post('/admin/quy-dinh/update',[QuyDinhController::class,'update']);
route::post('/admin/quy-dinh/delete',[QuyDinhController::class,'destroy']);

route::get('/admin/chuc-vu/data',[ChucVuController::class,'getdata']);
route::post('/admin/chuc-vu/create',[ChucVuController::class,'store']);
route::post('/admin/chuc-vu/update',[ChucVuController::class,'update']);
route::post('/admin/chuc-vu/delete',[ChucVuController::class,'destroy']);
