<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderResponseRequest;
use App\Mail\OrderResponseMail;
use App\Order;
use App\OrderResponse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'))
            ->with('i', (\request()->input('page', 1)-1)*10);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('order.show', compact('order'));
    }

    public function respondToOrder(OrderResponseRequest $request){
        $input = $request->validated();
        $user = User::find($input['user_id']);
        $email = Mail::to($user->email);
        $email->send( new OrderResponseMail($input+['name'=>$user->name]));
        if (isset($input['attachment'])){
            $attachmentName = time().'.'.$input['attachment']->extension();
            $input['attachment']->move(public_path('store'), $attachmentName);
            $input['attachment'] = $attachmentName;
        }
        OrderResponse::create($input);
        $result = Order::where('id', $input['order_id'])->update(['status' => 1]);
        $message = ['success' => 'Response sent successfully'];
        if(!$result){
            $message = ['error' => 'Unable to send response'];
        }
        return response()->json($message);
    }
}
