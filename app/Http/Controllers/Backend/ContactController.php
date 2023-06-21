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

        $notification = array(
			'message' => 'Contact Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('contact-view')->with($notification);
    }

    public function Edit($id){
        $contact = Contact::findOrFail($id);
        return view('backend.contact.edit', compact('contact'));
    }

    public function Update(Request $request){
        
        Contact::findOrFail($request->id)->update([
            'description' => $request->desc,
            'email' => $request->email,
            'phone' => $request->phone,
            'address'=> $request->address,
            'location' => $request->location,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
			'message' => 'Contact Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('contact-view')->with($notification);
    }
}
