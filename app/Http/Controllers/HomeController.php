<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'messages' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
