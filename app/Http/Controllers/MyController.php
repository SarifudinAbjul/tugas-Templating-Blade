<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function data()
    {
        return view('dashboard.data-tables');
    }
}



