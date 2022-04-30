<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function service(){
        return view('service');
    }
    public function portfolio(){
        return view('work');
    }
}
