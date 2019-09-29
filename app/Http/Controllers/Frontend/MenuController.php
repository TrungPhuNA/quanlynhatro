<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Motel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request, $slug)
    {
        if ($slug) {
            $menu = Menu::where('mn_slug',$slug)->first();
            if (!$menu)  {
                abort(404);
            }

            $motels = Motel::where('mt_menu_id', $menu->id)
                ->select('id','mt_name','mt_slug','created_at','mt_menu_id','mt_description','mt_acreage','mt_price',
                    'mt_address')
                ->orderByDesc('id')
                ->paginate(10);

            $viewData = [
                'menu' => $menu,
                'motels' => $motels
            ];

            return view('motel.index', $viewData);
        }
        dd("211");
    }
}
