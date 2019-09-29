<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Motel;
use Illuminate\Http\Request;

class MotelDetailController extends BaseController
{
    public function getMotelDetail(Request $request, $slug_menu, $slug)
    {
        $motel = Motel::where('mt_slug',$slug)->first();
        if (!$motel) abort(404);

        $menu = Menu::where('mn_slug', $slug_menu)->first();
        if (!$menu) abort(404);

        $viewData = [
            'motel' => $motel,
            'menu'  => $menu
        ];

        return view('motel_detail.index', $viewData);
    }
}
