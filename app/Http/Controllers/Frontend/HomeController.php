<?php

namespace App\Http\Controllers\Frontend;

use App\ServicePages\MotelListServicePage;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    private $detect = 'v2';
    private $motelService = null;
    public function __construct()
    {
        parent::__construct();
        $this->motelService = new MotelListServicePage();
    }

    public function index(Request $request)
    {
        $motels = $this->motelService->getListMotel();

        $viewData = [
            'motels' => $motels
        ];

        return view('home.'.$this->detect.'.index', $viewData);
    }
}
