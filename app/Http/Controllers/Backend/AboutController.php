<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\About;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function View(){
        $abouts = About::get();
        // dd($abouts);
        return view('backend.about.view', compact('abouts'));
    }

    public function Add(){
        return view('backend.about.add');
    }

    public function Store(Request $request){
        About::insert([
            'description' => $request->desc,
            'current_title' => $request->jobtitle,
            'detail' => $request->jobtitledesc,
            'birthdate' => $request->birthdate,
            'age' => $request->age,
            'education' => $request->edu,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'website' => $request->web,
            'skill_desc' => $request->skilldesc,
            'created_at' =>  Carbon::now()
    	]);

	    $notification = array(
			'message' => 'About Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('about-view')->with($notification);
    }

    public function Edit(){
        return view('backend.about.edit');
    }
}
