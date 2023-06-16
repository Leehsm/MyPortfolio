<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;
use App\Models\ResumeEdu;
use App\Models\ResumeExperience;
use App\Models\ResumeSummary;
use Carbon\Carbon;

class ResumeController extends Controller
{
    public function View(){
        $desc = Resume::get();
        $summary = ResumeSummary::get();
        $edu = ResumeEdu::get();
        $exp = ResumeExperience::get();

        return view('backend.resume.view', compact('desc', 'summary', 'edu', 'exp'));
    }

    public function DescAdd(){
        return view('backend.resume.desc.add');
    }

    public function DescStore(Request $request){
        Resume::insert([
            'description' => $request->desc,
            'created_at' =>  Carbon::now()
    	]);

	    $notification = array(
			'message' => 'Description Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('resume-view')->with($notification);
    }

    public function DescEdit(){
        return view('backend.resume.desc.edit');
    }


    

    public function SummaryAdd(){
        return view('backend.resume.summary.add');
    }

    public function SummaryStore(Request $request){
        ResumeSummary::insert([
            'name' => $request->name,
            'summary' => $request->summary,
            'phone' => $request->phone,
            'alamat' => $request->address,
            'email' => $request->email,
            'created_at' =>  Carbon::now()
    	]);

	    $notification = array(
			'message' => 'Summary Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('resume-view')->with($notification);
    }

    public function SummaryEdit(){
        return view('backend.resume.summary.edit');
    }


    public function EduAdd(){
        return view('backend.resume.edu.add');
    }

    public function EduStore(Request $request){
        ResumeEdu::insert([
            'education' => $request->cert,
            'year' => $request->year,
            'university' => $request->uni,
            'detail' => $request->detail,
            'created_at' =>  Carbon::now()
    	]);

	    $notification = array(
			'message' => 'Education Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('resume-view')->with($notification);
    }

    public function EduEdit(){
        return view('backend.resume.edu.edit');
    }


    public function ExpAdd(){
        return view('backend.resume.exp.add');
    }

    public function ExpStore(Request $request){
        ResumeExperience::insert([
            'name' => $request->exp,
            'year' => $request->year,
            'company' => $request->company,
            'detail1' => $request->detail1,
            'detail2' => $request->detail2,
            'detail3' => $request->detail3,
            'detail4' => $request->detail4,
            'detail5' => $request->detail5,
            'detail6' => $request->detail6,
            'detail7' => $request->detail7,
            'detail8' => $request->detail8,
            'created_at' =>  Carbon::now()
    	]);

	    $notification = array(
			'message' => 'Summary Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('resume-view')->with($notification);
    }

    public function ExpEdit(){
        return view('backend.resume.exp.edit');
    }
}
