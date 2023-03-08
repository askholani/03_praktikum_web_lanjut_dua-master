<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash(){
        return view('dashboard');
    }
    public function profile(){
        return view('profile');
    }
    public function profile2($id=1){
        return view('andika');
    }
    public function profile3(){
        return view('alif');
    }
}
