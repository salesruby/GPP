<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuoteRequest;
use App\Http\Requests\QuoteResponseRequest;
use App\Mail\QuoteResponseMail;
use App\Quote;
use App\QuoteResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $quotes = Quote::all();
        return view('quote.index', compact('quotes'))
            ->with('i', (\request()->input('page', 1)-1)*10);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('quote.create');
    }

    /**
     * @param QuoteRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(QuoteRequest $request)
    {
        $input = $request->validated();
        if (isset($input['attachment'])){
            $attachmentName = time().'.'.$input['attachment']->extension();
            $input['attachment']->move(public_path('store'), $attachmentName);
            $input['attachment'] = $attachmentName;
        }
        Quote::create($input);
        return redirect()->back()->with('success', 'An invoice on your Quote will be generated and sent immediately');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $quote = Quote::find($id);
        return view('quote.show', compact('quote'));
    }

    /**
     * @param QuoteResponseRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondToQuote(QuoteResponseRequest $request){
            $input = $request->validated();
            $quote = Quote::find($input['quote_id']);
            $email = Mail::to($quote->email);
            $email->send( new QuoteResponseMail($input+['name'=>$quote->name]));
            if (isset($input['attachment'])){
                $attachmentName = time().'.'.$input['attachment']->extension();
                $input['attachment']->move(public_path('store'), $attachmentName);
                $input['attachment'] = $attachmentName;
            }
            QuoteResponse::create($input);
            $result = Quote::where('id', $input['quote_id'])->update(['status' => 1]);
            $message = ['success' => 'Response sent successfully'];
            if(!$result){
                $message = ['error' => 'Unable to send response'];
            }
            return response()->json($message);
    }
}
