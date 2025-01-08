<?php

use App\Http\Controllers\ViecLamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('viec-lam',[ViecLamController::class,'vieclam']);
