<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerSchool extends Controller
{
    public function index(){
        return view('Masters.school.index');
    }
}
