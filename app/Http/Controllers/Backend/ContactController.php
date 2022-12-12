<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('backend.contact.index',compact('contacts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = Contact::get();
        return view('frontend.layouts.contact',compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'body'=>'required'
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body'=>$request->body,
        ];
        Contact::create($data);
        Mail::send('backend.emails.contact', $data, function($message){
            $message->to('roshanpanjiyara055@gmail.com', 'Roshan')->subject('Mail received from contact Us!');
        });
        toast('Thank you for contacting us, We will get back to you shortly.!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->back();

    }
    public function destroy($id)
    {
        Contact::where('created_at', '<', Carbon::now()->subMinute(1))->delete();
        $contact = Contact::find($id);
        $contact->delete();
        toast('Message deleted!','success')->autoClose(5000)->width('450px')->timerProgressBar();
        return redirect()->back();
    }
}
