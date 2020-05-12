<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Index()
    {
        return view('dashboard');
    }
     public function admin()
    {
        return view('coba.home');
    }  
    public function kjm()
    {
        return view('coba.homekjm');
    }  
    public function kps()
    {
        return view('coba.homekps');
    }
      public function kajur()
    {
        return view('coba.homekajur');
    }
}
