<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminRequestMotel;
use App\Models\Motel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMotelController extends Controller
{
    public function index(Request $request)
    {
        $motels = Motel::with('menu:id,mn_name');
        $motels = $motels->orderByDesc('id')->paginate(20);

        $viewData = [
            'motels' => $motels
        ];

        return view('admin.motel.index',$viewData);
    }

    public function create()
    {
        return view('admin.motel.create');
    }

    public function store(AdminRequestMotel $requestMotel)
    {
        $data = $requestMotel->except('_token');
        $data['mt_slug'] = str_slug($requestMotel->mt_name);
        $data['created_at'] = $data['updated_at'] = Carbon::now();
        Motel::insert($data);
        return redirect()->back();
    }

}
