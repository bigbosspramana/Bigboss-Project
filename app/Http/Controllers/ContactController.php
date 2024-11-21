<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show () {
        return view('contact');
    }

    public function send () {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:5',
        ]);
        Mail::to('kifay0715@gmail.com')->send(new ContactMe($data));

        return redirect()->back()->with('success', 'Email has been sent successfully!');
    }
}
