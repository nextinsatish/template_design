<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerSchool extends Controller
{
    public function index(){
        return view('Masters.school.index');
    }
    public function create(){
        return view('Masters.School.create');
    }
public function show(){
    return view('Masters.School.View');
}
public function edit(){
    return view('Masters.School.Update');
}
}
