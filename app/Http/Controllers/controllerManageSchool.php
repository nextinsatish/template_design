<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerManageSchool extends Controller
{
    public function index(Request $request)
    {
        return view('ManageSchool.index');
    }
    public function create()
    {
        return view('ManageSchool.Create');
    }
    public function show()
    {
        return view('ManageSchool.View');
    }
    public function edit()
    {
        return view('ManageSchool.Edit');
    }
}
