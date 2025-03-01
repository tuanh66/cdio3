<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuanTriVienSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('quan_tri_viens')->delete();
        DB::table('quan_tri_viens')->truncate();
        DB::table('quan_tri_viens')->insert([
            [
                'ho_va_ten'     => 'Nguyễn Văn A',
                'email'         => 'nvA@example.com',
                'password'      => '123456',
                'so_dien_thoai' => '0912345678',
                'ngay_sinh'     => '1990-01-01',
                'chuc_vu_id'    => 1,
                'tinh_trang'    => 1,
            ],
        ]);
    }
}
