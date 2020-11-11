<?php

namespace App\Http\Controllers;

use App\Job;
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

    public function career(){
        $jobs = Job::where('status', 0)->get();
        return view('pages.career', compact('jobs'));
    }

    public function policy(){
        return view('pages.policy');
    }
}
