<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $detect = 'v2';
    public function index()
    {
        return view('home.'.$this->detect.'.index');
    }
}
