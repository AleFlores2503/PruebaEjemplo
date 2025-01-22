<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $sections = ['1', '2', '3', '4'];
        return view('home', compact('sections'));
    }
}
