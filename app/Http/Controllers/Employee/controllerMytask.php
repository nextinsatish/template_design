<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerMytask extends Controller
{
    public function index()
    {
        return view("Employee.myTask.index");
    }
    public function create(){
        return view("Employee.myTask.Create");
    }
    public function edit(){
        return view("Employee.myTask.Update");
    }
}
