<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }
    public function getDashboard()
    {
        return view('pages.dashboard');
    }
}
