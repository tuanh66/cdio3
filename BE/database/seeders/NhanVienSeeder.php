<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->truncate();
        DB::table('nhan_viens')->insert([
            [
                'ho_va_ten' => 'Nguyễn Văn A',
                'email' => 'nva@example.com',
                'password' => '123456',
                'ngay_sinh' => '1990-01-01',
                'so_dien_thoai' => '0901234567',
                'dia_chi' => 'Hà Nội',
                'luong_co_ban' => 10000000,
                'chuc_vu' => 'Nhân viên',
                'phong_ban' => 'Phòng nhân sự',
                'tinh_trang' => 1
            ],
            [
                'ho_va_ten' => 'Trần Thị B',
                'email' => 'ttb@example.com',
                'password' => '123456',
                'ngay_sinh' => '1988-02-10',
                'so_dien_thoai' => '0912345678',
                'dia_chi' => 'Hồ Chí Minh',
                'luong_co_ban' => 12000000,
                'chuc_vu' => 'Trưởng phòng',
                'phong_ban' => 'Marketing',
                'tinh_trang' => 0
            ],
            [
                'ho_va_ten' => 'Lê Văn C',
                'email' => 'lvc@example.com',
                'password' => '123456',
                'ngay_sinh' => '1995-03-15',
                'so_dien_thoai' => '0923456789',
                'dia_chi' => 'Đà Nẵng',
                'luong_co_ban' => 9000000,
                'chuc_vu' => 'Nhân viên',
                'phong_ban' => 'IT',
                'tinh_trang' => 1
            ],
            [
                'ho_va_ten' => 'Phạm Văn D',
                'email' => 'pvd@example.com',
                'password' => '123456',
                'ngay_sinh' => '1992-04-20',
                'so_dien_thoai' => '0934567890',
                'dia_chi' => 'Hải Phòng',
                'luong_co_ban' => 11000000,
                'chuc_vu' => 'Nhân viên',
                'phong_ban' => 'Kế toán',
                'tinh_trang' => 0
            ],
            [
                'ho_va_ten' => 'Hoàng Thị E',
                'email' => 'hte@example.com',
                'password' => '123456',
                'ngay_sinh' => '1993-05-25',
                'so_dien_thoai' => '0945678901',
                'dia_chi' => 'Cần Thơ',
                'luong_co_ban' => 10500000,
                'chuc_vu' => 'Nhân viên',
                'phong_ban' => 'Nhân sự',
                'tinh_trang' => 1
            ],
            [
                'ho_va_ten' => 'Bùi Văn F',
                'email' => 'bvf@example.com',
                'password' => '123456',
                'ngay_sinh' => '1991-06-30',
                'so_dien_thoai' => '0956789012',
                'dia_chi' => 'Vũng Tàu',
                'luong_co_ban' => 9500000,
                'chuc_vu' => 'Nhân viên',
                'phong_ban' => 'Bán hàng',
                'tinh_trang' => 1
            ],
            [
                'ho_va_ten' => 'Nguyễn Thị G',
                'email' => 'ntg@example.com',
                'password' => '123456',
                'ngay_sinh' => '1994-07-10',
                'so_dien_thoai' => '0967890123',
                'dia_chi' => 'Nha Trang',
                'luong_co_ban' => 9800000,
                'chuc_vu' => 'Nhân viên',
                'phong_ban' => 'Chăm sóc khách hàng',
                'tinh_trang' => 1
            ],
            [
                'ho_va_ten' => 'Đỗ Văn H',
                'email' => 'dvh@example.com',
                'password' => '123456',
                'ngay_sinh' => '1987-08-15',
                'so_dien_thoai' => '0978901234',
                'dia_chi' => 'Bắc Ninh',
                'luong_co_ban' => 11500000,
                'chuc_vu' => 'Trưởng nhóm',
                'phong_ban' => 'Sản xuất',
                'tinh_trang' => 1
            ],
            [
                'ho_va_ten' => 'Phan Thị I',
                'email' => 'pti@example.com',
                'password' => '123456',
                'ngay_sinh' => '1996-09-20',
                'so_dien_thoai' => '0989012345',
                'dia_chi' => 'Hà Nam',
                'luong_co_ban' => 9200000,
                'chuc_vu' => 'Nhân viên',
                'phong_ban' => 'Logistics',
                'tinh_trang' => 1
            ],
            [
                'ho_va_ten' => 'Vũ Văn K',
                'email' => 'vvk@example.com',
                'password' => '123456',
                'ngay_sinh' => '1990-10-25',
                'so_dien_thoai' => '0990123456',
                'dia_chi' => 'Nam Định',
                'luong_co_ban' => 10800000,
                'chuc_vu' => 'Nhân viên',
                'phong_ban' => 'Kinh doanh',
                'tinh_trang' => 1
            ]
        ]);
    }
}
