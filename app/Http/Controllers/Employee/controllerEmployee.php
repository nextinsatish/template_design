<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerEmployee extends Controller
{
    public function index(Request $request)
    {
        return view('Employee.index');
    }
    public function create(Request $request)
    {
        return view('Employee.Create');
    }
    public function update(Request $request)
    {
        return view('Employee.Update');
    }
}
