<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactView()
    {
        return view('contacts.contact');
    }

    public function sendContactMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:32',
            'email' => 'required|email',
            'contact_message' => 'required|min:10|max:255',
        ]);

        $contact = Contact::create($request->all());

        return redirect(route('contactUs'))->with('contactMessage', 'Thank you for contacting us!');
    }
}
