<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin'])->except('store');
    }

    public function index(){
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'))
            ->with('i',(request()->input('page', 1) - 1) * 10 );
    }

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(ContactRequest $request)
    {
        $input = $request->validated();
        $message = ['success' => 'Email sent successfully'];
        $email = Mail::to('clientservice@globalplusonline.com');
        if(isset($request->copy)){
            $email->bcc($input['email']);
        }
        $email->send( new ContactMail($input));
        $result = Contact::create($request->validated());
        if(!$result){
            $message = ['success' => 'Email sent successfully'];
        }
        return response()->json($message);
    }

    public function show($id){
        $contact = Contact::find($id);
        return response()->json($contact);
    }
}
