<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequestMotel;
use App\Models\Location;
use App\Models\Menu;
use App\Models\Motel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $menus = $this->getListMenus();
        $cities = Location::where('loc_level',Location::CITY)->select('loc_name','id')->get();

        $viewData = [
            'menus'  => $menus,
            'cities' => $cities,
        ];
        return view('admin.motel.create', $viewData);
    }

    public function edit($id)
    {
        $cities = Location::where('loc_level',Location::CITY)->select('loc_name','id')->get();

        $viewData = [
            'menus'  => $this->getListMenus(),
            'motel'  => Motel::findOrFail($id),
            'cities' => $cities,
        ];
        return view('admin.motel.update', $viewData);
    }

    public function store(AdminRequestMotel $requestMotel)
    {
        $this->insertOrUpdate($requestMotel);
        return redirect()->back();
    }

    public function update(AdminRequestMotel $requestMotel, $id)
    {
        $this->insertOrUpdate($requestMotel, $id);
        return redirect()->back();
    }

    public function insertOrUpdate($request, $id = '')
    {
        $code = 200;
        $data = $request->except('_token','album');
        $data['mt_slug'] = str_slug($request->mt_name);
        $motel = new Motel();
        if ($id)
        {
            $motel = Motel::findOrFail($id);
        }else {
            $data['created_at'] = Carbon::now();
        }

        $data['updated_at'] = Carbon::now();

        try{
            $motel->fill($data)->save();
        }catch (\Exception $exception)
        {
            $code = 500;
            Log::error("Error insertOrUpdate: ".$exception->getMessage());
        }

        return $code;
    }

    public function action($action, $id)
    {
        $motel = Motel::findOrFail($id);
        switch ($action)
        {
            case 'success':
                $motel->mt_active =  $motel->mt_active == 2 ? 1 : 2;
                $motel->save();
                break;

            case 'cancel':
                $motel->mt_active =  Motel::ACTIVE_CANCEL;
                $motel->save();
                break;
        }

        return redirect()->back();
    }

    private function getListMenus()
    {
        return Menu::select('id','mn_name')->get();
    }

    public function getLocationByParent(Request $request)
    {
        $id = $request->get('id');
        if ($id)
        {
            $locations = Location::where('loc_parent_id',$id)
                ->select('id','loc_name')
                ->get();

            return response()->json(['data' => $locations]);
        }
    }

}
