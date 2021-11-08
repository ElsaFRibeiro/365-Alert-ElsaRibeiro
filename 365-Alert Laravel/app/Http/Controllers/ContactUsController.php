<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\VisitorContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class ContactUSController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function showContactForm()
    {
        return view('contact');
    }
    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function submitContactForm(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('365alerts.flood@gmail.com')->send(new VisitorContact($data));
        // return back()->with('success', 'Thanks for contacting us!');

        Session::flash('message', "Thank you for your email");
        return view('contact');
    }
}