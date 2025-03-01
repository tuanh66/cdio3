<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuyDinhSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('quy_dinhs')->delete();
        DB::table('quy_dinhs')->truncate();
        DB::table('quy_dinhs')->insert([
            [
                'ma_so'         => 'QD001',
                'so_diem'       => 10,
                'noi_dung'      => 'Điểm thưởng cho hoàn thành  công việc đúng hạn',
                'ghi_chu'       => 'Áp dụng cho tất cả nhân viên',
                'loai_diem'     => 'Thưởng',
                'tinh_trang'    => 1,
            ],
            [
                'ma_so'         => 'QD002',
                'so_diem'       => 5,
                'noi_dung'      => 'Điểm phạt vì đi muộn',
                'ghi_chu'       => 'Áp dụng khi đi muộn hơn 15 phút',
                'loai_diem'     => 'Phạt',
                'tinh_trang'    => 1,
            ],
            [
                'ma_so'         => 'QD003',
                'so_diem'       => 20,
                'noi_dung'      => 'Điểm thưởng vì đóng góp sáng kiến',
                'ghi_chu'       => 'Chỉ áp dụng cho nhân viên được quản lý đánh giá',
                'loai_diem'     => 'Thưởng',
                'tinh_trang'    => 1,
            ],
            [
                'ma_so'         => 'QD004',
                'so_diem'       => 10,
                'noi_dung'      => 'Điểm phạt vì vi phạm nội quy công ty',
                'ghi_chu'       => 'Áp dụng cho các trường hợp vi phạm nghiêm trọng',
                'loai_diem'     => 'Phạt',
                'tinh_trang'    => 1,
            ],
            [
                'ma_so'         => 'QD005',
                'so_diem'       => 15,
                'noi_dung'      => 'Điểm thưởng cho hoàn thành  công việc đúng hạn',
                'ghi_chu'       => 'Áp dụng khi có sự chấp thuận của quản lý',
                'loai_diem'     => 'Thưởng',
                'tinh_trang'    => 1,
            ],
        ]);
    }
}
