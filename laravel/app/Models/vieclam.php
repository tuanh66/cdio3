<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vieclam extends Model
{
    protected $table = 'vieclams';
    protected $fillable = [
        'ho_va_ten',
        'cong_ty',
        'cong_viec',
        'muc_luong',
        'dia_diem',
        'ngay_tao',
        'han_nop',
        'kinh_nghiem',
        'cap_bac',
    ];
}
