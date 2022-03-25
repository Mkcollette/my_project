<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salonSpaController extends Controller
{
    public function homePage(){
        return view('Home');
    }

    public function about(){
        return view('About');
    }

    public function contact(){
        return view('Contact us');
    }

    public function appointment(){
        return view('Book session');
    }
}
