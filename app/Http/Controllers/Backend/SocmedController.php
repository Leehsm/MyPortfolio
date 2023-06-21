<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Socmed;
use Carbon\Carbon;

class SocmedController extends Controller
{
    public function View(){
        $socmed = Socmed::get();
        return view('backend.socmed.view', compact('socmed'));
    }

    public function Add(){
        return view('backend.socmed.add');
    }

    public function Store(Request $request){
        Socmed::insert([
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Social Media Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('socmed-view')->with($notification);
    }

    public function Edit($id){
        $socmed = Socmed::findOrFail($id);
        return view('backend.socmed.edit', compact('socmed'));
    }

    public function Update(Request $request){
        Socmed::findOrFail($request->id)->update([
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'Updated_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Social Media Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('socmed-view')->with($notification);
    }
}
