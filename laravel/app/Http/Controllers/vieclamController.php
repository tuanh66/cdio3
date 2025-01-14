<?php

namespace App\Http\Controllers;

use App\Models\vieclam;
use Illuminate\Http\Request;

class vieclamController extends Controller
{
    public function vieclam()
    {
        $data = vieclam::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function addvieclam(Request $request)
    {
        vieclam::create([
            'ho_va_ten'               => $request->ho_va_ten,
            'cong_ty'                 => $request->cong_ty,
            'cong_viec'               => $request->cong_viec,
            'muc_luong'               => $request->muc_luong,
            'dia_diem'                => $request->dia_diem,
            'ngay_tao'                => $request->ngay_tao,
            'han_nop'                 => $request->han_nop,
            'kinh_nghiem'             => $request->kinh_nghiem,
            'cap_bac'                 => $request->cap_bac,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Thêm Mới Việc Làm Thành Công',
        ]);
    }
    public function editvieclam(Request $request)
    {
        vieclam::where('id', $request->id)->update([
            'ho_va_ten'               => $request->ho_va_ten,
            'cong_ty'                 => $request->cong_ty,
            'cong_viec'               => $request->cong_viec,
            'muc_luong'               => $request->muc_luong,
            'dia_diem'                => $request->dia_diem,
            'ngay_tao'                => $request->ngay_tao,
            'han_nop'                 => $request->han_nop,
            'kinh_nghiem'             => $request->kinh_nghiem,
            'cap_bac'                 => $request->cap_bac,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Cập Nhật Việc Làm Thành Công',
        ]);
    }
    public function delvieclam(Request $request)
    {
        vieclam::where('id', $request->id)->delete();

        return response()->json([
            'status' =>true,
            'message' =>"Đã xoá Việc Làm Thành Công"
        ]);
    }
}
