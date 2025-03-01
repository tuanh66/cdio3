<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucVuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chuc_vus')->delete();
        DB::table('chuc_vus')->insert([
            [
                'ten_chuc_vu' => 'Quản Trị Viên',
                'tinh_trang'  => 1,
            ],
            [
                'ten_chuc_vu' => 'Giám Đốc',
                'tinh_trang'  => 1,
            ],
            [
                'ten_chuc_vu' => 'Phó Giám Đốc',
                'tinh_trang'  => 1,
            ],
            [
                'ten_chuc_vu' => 'Trường Phòng',
                'tinh_trang'  => 1,
            ],
            [
                'ten_chuc_vu' => 'Nhân Viên',
                'tinh_trang'  => 1,
            ],
        ]);
    }
}
