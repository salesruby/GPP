<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Service;
use Hashids\Hashids;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private static $hashIds;

    public function __construct()
    {
        self::$hashIds = new Hashids('gpp', 10);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index(){
        $services = Service::all();
        return view('shop.index', compact('services'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){
        $item = Service::find(self::$hashIds->decode($id)[0]);
        return view('shop.show', compact('item'));
    }

    public function cart( $id){
        $item = Service::find(self::$hashIds->decode($id)[0]);
        return view('shop.cart', compact('item'));
    }

    /**
     * @param CartRequest $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pay(CartRequest $request, $id){
        $item = Service::find(self::$hashIds->decode($id)[0]);
        $quantity = (int)$request->quantity;
        $totalPrice = $quantity * $item->price; //in kobo
        $fullName = $request->full_name;
        $email = $request->email;
        $phone = $request->phone;
        return view('shop.pay', compact('item', 'quantity', 'totalPrice', 'fullName', 'email', 'phone'));
    }
}
