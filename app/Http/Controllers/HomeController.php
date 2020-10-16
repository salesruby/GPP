<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Order;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newOrder = Order::whereDate('created_at', Carbon::today())->where('status', 0 )->get();
        $newContact = Contact::whereDate('created_at', Carbon::today())->get();
        if(!auth()->user()->hasRole('Admin')){
            return  view('client.home');
        };
        return view('home', compact('newOrder', 'newContact'));
    }

}
