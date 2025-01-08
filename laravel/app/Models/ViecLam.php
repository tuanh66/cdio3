<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViecLam extends Model
{
    protected  $table = 'viec_lams';
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
