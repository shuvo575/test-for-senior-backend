<?php

namespace App\Http\Controllers;

use App\Buyer;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers = Buyer::all();

        return view('second-buyer-eloquent', compact('buyers'));
    }

}
