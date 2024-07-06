<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactChangeController extends Controller
{
    public function edit()
    {
        $contact = Contact::first();
        return view('Dashboard.contact.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);

        $contact = Contact::first();
        if (!$contact) {
            $contact = new Contact();
        }

        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->save();

        return redirect()->route('dashboard.contact.edit')->with('success', 'Contact information updated successfully.');
    }
}
