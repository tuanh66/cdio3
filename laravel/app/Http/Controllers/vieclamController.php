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
}
