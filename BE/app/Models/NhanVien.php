<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NhanVien extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'nhan_viens';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'password',
        'ngay_sinh',
        'so_dien_thoai',
        'dia_chi',
        'luong_co_ban',
        'chuc_vu',
        'phong_ban',
        'tinh_trang'
    ];
}
