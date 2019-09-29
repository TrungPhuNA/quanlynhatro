<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotelDetailController extends Controller
{
    public function motelDetail(Request $request)
    {
        return view('motel_detail.index');
    }
}
