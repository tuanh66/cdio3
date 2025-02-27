<?php

namespace App\Http\Controllers;

use App\Http\Requests\NhanVienThemMoiRequest;
use App\Http\Requests\NhanVienUpdateRequest;
use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function getData()
    {
        $data = NhanVien::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(NhanVienThemMoiRequest $request)
    {
        NhanVien::create([
            'ho_va_ten' =>  $request->ho_va_ten,
            'email' =>  $request->email,
            'password' =>  $request->password,
            'ngay_sinh' =>  $request->ngay_sinh,
            'so_dien_thoai' =>  $request->so_dien_thoai,
            'dia_chi' =>  $request->dia_chi,
            'luong_co_ban' =>  $request->luong_co_ban,
            'chuc_vu' =>  $request->chuc_vu,
            'phong_ban' =>  $request->phong_ban,
            'tinh_trang' =>  $request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Them thanh cong',
        ]);
    }
    public function update(Request $request)
    {
        NhanVien::where('id', $request->id)
            ->update([
                'ho_va_ten' =>  $request->ho_va_ten,
                'email' =>  $request->email,
                'password' =>  $request->password,
                'ngay_sinh' =>  $request->ngay_sinh,
                'so_dien_thoai' =>  $request->so_dien_thoai,
                'dia_chi' =>  $request->dia_chi,
                'luong_co_ban' =>  $request->luong_co_ban,
                'chuc_vu' =>  $request->chuc_vu,
                'phong_ban' =>  $request->phong_ban,
                'tinh_trang' =>  $request->tinh_trang,
            ]);
        return response()->json([
            'status' => true,
            'message' => 'cập nhật thành công!!'
        ]);
    }
    public function destroy(Request $request)
    {
        NhanVien::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Xóa thành công!!'
        ]);
    }
}
