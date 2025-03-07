<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'ho_va_ten' => 'Trần Quang Tuấn Anh',
                'email' => 'admin@gmail.com',
                'password' => '123456',
                'ngay_sinh' => '2004-08-10',
                'so_dien_thoai' => '0702775297',
                'dia_chi' => 'Đà Nẵng',
                'tinh_trang' => 1
            ],
        ]);
    }
}
