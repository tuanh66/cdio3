<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
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
