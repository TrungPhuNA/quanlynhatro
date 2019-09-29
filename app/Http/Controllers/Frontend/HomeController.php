<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    private $detect = 'v2';
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('home.'.$this->detect.'.index');
    }
}
