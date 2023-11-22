<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerCity extends Controller
{
    public function index(){
        return view("Masters.City.index");
    }
}
