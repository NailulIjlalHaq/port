<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function about()
    {
        return view('about');
    }
}
