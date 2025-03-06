<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminDoiMatKhauRequest;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\NhanVienThemMoiRequest;
use App\Http\Requests\NhanVienUpdateRequest;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function login(AdminLoginRequest $request)
    {
        $check = NhanVien::where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($check) {
            return response()->json([
                'status'    => 1,
                'message'   => "Bạn đã đăng nhập thành công",
                'token'     => $check->createToken('token_nhan_vien')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => "Tài khoản hoặc mật khẩu không đúng",
            ]);
        }
    }
    public function doiMatKhau(AdminDoiMatKhauRequest $request)
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login->password == $request->mat_khau_cu) {
            NhanVien::where('id', $user_login->id)->update([
                'password' => $request->mat_khau_moi
            ]);
            return response()->json([
                'status' => 1,
                'message' => 'Đã đổi mật khẩu thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Mật khẩu cũ không đúng!'
            ]);
        }
    }
    public function checkToken(Request $request)
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login) {
            return response()->json([
                'status'     => 1,
                'data'       => $user_login
            ]);
        } else {
            return response()->json([
                'status'     => 0,
                'message'    => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }
    public function profile()
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login) {
            return response()->json([
                'status'    => 1,
                'data'      => $user_login
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }
}
