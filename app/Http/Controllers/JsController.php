<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsController extends Controller
{
    public function callback(){
        return view('callback');
    }

    public function sort_js(){
        return view('sort');
    }

    public function foreach_js(){
        return view('foreach');
    }

    public function filter(){
        return view('filter');
    }

    public function map(){
        return view('map');
    }

    public function reduce(){
        return view('reduce');
    }

    public function animation(){
        return view('animation');
    }


}
