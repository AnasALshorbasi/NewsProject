<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontsiteController extends Controller
{
    public function home(){
        return view('frontsite.home');
    }

    public function single(){
        return view('frontsite.single');
    }

    public function contact(){
        return view('frontsite.contact');
    }
}
