<?php

namespace App\Http\Controllers;

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
}
