<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show contact page
    public function show()
    {
        return view('contact'); // make sure contact.blade.php is in resources/views
    }

    // Handle form submission
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Optionally, send email or save to database
        // Mail::to('your@email.com')->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
