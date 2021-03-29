<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function endek()
    {
        return view('endek');
    }

    public function songket()
    {
        return view('songket');
    }

    public function gringsing()
    {
        return view('gringsing');
    }
}