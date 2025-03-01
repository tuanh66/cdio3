<?php

namespace App\Http\Controllers;

use App\Models\QuyDinh;
use Illuminate\Http\Request;

class QuyDinhController extends Controller
{
    public function getData()
    {
        $data = QuyDinh::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        QuyDinh::create([
            'ma_so'   => $request->ma_so,
            'so_diem'   => $request->so_diem,
            'noi_dung'   => $request->noi_dung,
            'ghi_chu'   => $request->ghi_chu,
            'loai_diem'   => $request->loai_diem,
            'tinh_trang'   => $request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Thêm Mới Thành Công',
        ]);
    }
    public function update(Request $request)
    {
        QuyDinh::where('id', $request->id)
            ->update([
                'ma_so'   => $request->ma_so,
                'so_diem'   => $request->so_diem,
                'noi_dung'   => $request->noi_dung,
                'ghi_chu'   => $request->ghi_chu,
                'loai_diem'   => $request->loai_diem,
                'tinh_trang'   => $request->tinh_trang,
            ]);
        return response()->json([
            'status' => true,
            'message' => 'Cập nhật thành công!!'
        ]);
    }
    public function destroy(Request $request)
    {
        QuyDinh::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Xóa thành công!!'
        ]);
    }
}
