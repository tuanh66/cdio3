<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuyDinh extends Model
{
    protected $table ='quy_dinhs';
    protected $fillable =[
        'ma_so',
        'so_diem',
        'noi_dung',
        'ghi_chu',
        'loai_diem',
        'tinh_trang',
    ];
}
