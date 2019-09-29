<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMenuController extends AdminBaseController
{
    public function index()
    {
        return view('admin.menu.index');
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store()
    {

    }

    public function edit($id)
    {

    }
    
    public function update()
    {

    }
}
