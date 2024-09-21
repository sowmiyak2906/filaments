<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
{
    // Logic for handling contact form submission
    // For example, store it in the database or send an email
    return redirect()->back()->with('success', 'Contact form submitted successfully!');
}

public function submitEnquiry(Request $request)
{
    // Logic for handling enquiry form submission
    return redirect()->back()->with('success', 'Enquiry form submitted successfully!');
}

}


