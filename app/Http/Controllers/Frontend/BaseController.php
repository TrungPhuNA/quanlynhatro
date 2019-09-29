<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        try{
            $menus = Menu::select('id','mn_name','mn_slug')->get();
            View::share('menus', $menus);
        }catch (\Exception $exception)
        {

        }
    }
}
