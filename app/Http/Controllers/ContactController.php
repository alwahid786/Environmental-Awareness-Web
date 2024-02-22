<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        // Validate the form data as needed
        $data = $request->all();
        // Send email
        Mail::to('info@citarumwater.com')->send(new ContactFormMail($data));
        return redirect()->back()->with('success', 'Contact Form Submitted Successfully!');
    }
}
