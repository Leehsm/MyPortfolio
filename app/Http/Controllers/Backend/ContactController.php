<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function View(){
        $contacts = Contact::get();
        return view('backend.contact.view', compact('contacts'));
    }

    public function Add(){
        return view('backend.contact.add');
    }

    public function Store(Request $request){
        Contact::insert([
            'description' => $request->desc,
            'email' => $request->email,
            'phone' => $request->phone,
            'address'=> $request->address,
            'location' => $request->location,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('contact-view')->with($notification);
    }

    public function Edit(){
        return view('backend.contact.edit');
    }
}
