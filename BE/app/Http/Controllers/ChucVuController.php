<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    public function getData()
    {
        $data = ChucVu::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        ChucVu::create([
            'ten_chuc_vu' => $request->ten_chuc_vu,
            'tinh_trang'  => $request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Thêm Thành Công!!',
        ]);
    }
    public function update(Request $request)
    {
        ChucVu::where('id', $request->id)
            ->update([
                'ten_chuc_vu' => $request->ten_chuc_vu,
                'tinh_trang' => $request->tinh_trang,
            ]);
        return response()->json([
            'status' => true,
            'message' => 'cập nhật thành công!!'
        ]);
    }
    public function destroy(Request $request)
    {
        ChucVu::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Xóa thành công!!'
        ]);
    }
}
