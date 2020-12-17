<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\OrderResponse;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $clientRole = Role::where('name', 'Client')->first();
        $clients = $clientRole->users;
        return view('client.index', compact('clients'))
            ->with('i', (\request()->input('page', 1) - 1) * 10);
    }

    public function show($id)
    {
        $client = User::find($id);
        return view('client.show_client_transactions', compact('client'))
            ->with('i', (\request()->input('page', 1) - 1) * 10);
    }

    public function account()
    {
        $user = auth()->user();
        return view('client.account', compact('user'));
    }

    public function address()
    {
        $user = auth()->user();
        return view('client.address', compact('user'));
    }

    public function updateAccount(Request $request)
    {
        $input = $this->validate($request, [
            'name' => ['required', 'string', 'min:2'],
            'email' => Rule::unique('users')->ignore(auth()->user()->id, 'id')
        ]);
        auth()->user()->update($input);
        return redirect()->route('home')->with('success', 'Update Successful');
    }

    public function updateAddress(Request $request)
    {
        $input = $this->validate($request, [
            'phone' => 'required',
            'address' => ['required', 'string', 'max:255']
        ]);
        auth()->user()->address()->update($input);
        return redirect()->route('home')->with('success', 'Update Successful');
    }

    public function transaction()
    {
        $orders = auth()->user()->order;
        $shoppedItems = auth()->user()->transaction;
        return view('client.transaction', compact('orders', 'shoppedItems'))
            ->with('i', (\request()->input('page', 1) - 1) * 10);
    }

    public function cart()
    {
        return view('client.cart');
    }

    public function storeOrder(OrderRequest $request)
    {
        $input = $request->validated();
        if (isset($input['attachment'])) {
            $attachmentName = time() . '.' . $input['attachment']->extension();
            $input['attachment']->move(public_path('store'), $attachmentName);
            $input['attachment'] = $attachmentName;
        }
        Order::create($input);
        return redirect()->route('client.cart')->with('success', 'An invoice on your order will be generated and sent immediately');
    }

}
