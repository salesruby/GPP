<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     *
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        if ($paymentDetails['data']['status'] == 'success') {
            Transaction::create([
                'transaction_id' => $paymentDetails['data']['id'] ,
                'name' => $paymentDetails['data']['metadata']['name'],
                'email' => $paymentDetails['data']['customer']['email'],
                'phone' => $paymentDetails['data']['metadata']['phone'],
                'service_id' => $paymentDetails['data']['metadata']['item_id'],
                'user_id' => $paymentDetails['data']['metadata']['user_id'],
            ]);
            $message =['success', 'Transaction completed, you will be contacted for delivery'];
        }else{
            $message = ['custom_error', 'Transaction failed, Try again later.'];
        }
        return redirect()->route('home')->with($message);
    }
}
