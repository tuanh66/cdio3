<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuyDinhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quy_dinhs')->delete();
        DB::table('quy_dinhs')->truncate();
        DB::table('quy_dinhs')->insert([
            'ma_so'      =>'QD001',
            'so_diem'      =>'10',
            'noi_dung'      =>'Điểm thưởng cho hoàn thành  công việc đúng hạn',
            'ghi_chu'      =>'áp dụng cho tất cả nhân viên ',
            'loai_diem'      =>'100',
            'tinh_trang'      =>'hiển thị',
        ]);
    }
}
