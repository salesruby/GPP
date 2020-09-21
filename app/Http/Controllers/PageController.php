<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('pages.about-us');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function service(){
        return view('pages.our_services');
    }
}
