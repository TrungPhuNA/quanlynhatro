<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLocationController extends Controller
{
    public function index()
    {
        $locations = Location::paginate(20);

        $viewData = [
            'locations' => $locations
        ];

        return view('admin.location.index', $viewData);
    }
}
