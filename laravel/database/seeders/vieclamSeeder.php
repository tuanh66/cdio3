<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vieclamSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('vieclams')->delete();
        DB::table('vieclams')->truncate();
        DB::table('vieclams')->insert([
            [
                'ho_va_ten'   => 'Trần Quang Tuấn Anh',
                'cong_ty'     => 'Công TY TNHH MỘT THÀNH VIÊN TUẤN PHƯƠNG',
                'cong_viec'   => 1,
                'muc_luong'   => 1,
                'dia_diem'    => 1,
                'ngay_tao'    => '2025/01/01',
                'han_nop'     => '2025/03/30',
                'kinh_nghiem' => 1,
                'cap_bac'     => 1,
            ],
            [
                'ho_va_ten'   => 'Trần Hữu Hiếu',
                'cong_ty'     => 'Công TY TNHH MỘT THÀNH VIÊN HIẾU THỨ HAI',
                'cong_viec'   => 1,
                'muc_luong'   => 1,
                'dia_diem'    => 1,
                'ngay_tao'    => '2025/01/01',
                'han_nop'     => '2025/03/30',
                'kinh_nghiem' => 1,
                'cap_bac'     => 1,
            ],
        ]);
    }
}
