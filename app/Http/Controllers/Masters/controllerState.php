<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerState extends Controller
{
    public function index(){
        return view("Masters.State.index");
    }
}
