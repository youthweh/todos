<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //menampilkan view pas di about
    public function index()
    {
        return view('about');
    }
}
