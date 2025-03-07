<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientDoiMatKhauRequest;
use App\Http\Requests\ClientLoginRequest;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhachHangController extends Controller
{
    public function getData()
    {
        $data = KhachHang::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        KhachHang::create([
            'ho_va_ten' =>  $request->ho_va_ten,
            'email' =>  $request->email,
            'password' =>  $request->password,
            'ngay_sinh' =>  $request->ngay_sinh,
            'so_dien_thoai' =>  $request->so_dien_thoai,
            'dia_chi' =>  $request->dia_chi,
            'tinh_trang' =>  $request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Thêm Thành Công',
        ]);
    }
    public function update(Request $request)
    {
        KhachHang::where('id', $request->id)
            ->update([
                'ho_va_ten' =>  $request->ho_va_ten,
                'email' =>  $request->email,
                'password' =>  $request->password,
                'ngay_sinh' =>  $request->ngay_sinh,
                'so_dien_thoai' =>  $request->so_dien_thoai,
                'dia_chi' =>  $request->dia_chi,
                'tinh_trang' =>  $request->tinh_trang,
            ]);
        return response()->json([
            'status' => true,
            'message' => 'Cập Nhật Thành Công'
        ]);
    }
    public function destroy(Request $request)
    {
        KhachHang::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Xóa Thành Công'
        ]);
    }
    public function login(ClientLoginRequest $request)
    {
        $check = KhachHang::where('email', $request->email)
                         ->where('password', $request->password)
                         ->first();
        if ($check) {
            return response()->json([
                'status'    => 1,
                'message'   => "Bạn đã đăng nhập thành công.",
                'token'     => $check->createToken('token_khach_hang')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Tài khoản hoặc mật khẩu không đúng.",
            ]);
        }
    }
    public function doiMatKhau(ClientDoiMatKhauRequest $request)
    {
        $user_login = Auth::guard('sanctum')->user();
        if ($user_login->password == $request->mat_khau_cu) {
            KhachHang::where('id', $user_login->id)->update([
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
    public function checkToken()
    {
        $user_login = Auth::guard('sanctum')->user();
        if($user_login) {
            return response()->json([
                'status'    => 1,
                'ho_ten'    => $user_login->ho_va_ten
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
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
