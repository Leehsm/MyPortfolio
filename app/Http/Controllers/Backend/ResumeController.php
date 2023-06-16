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

    public function DescEdit(){
        return view('backend.resume.desc.edit');
    }


    

    public function SummaryAdd(){
        return view('backend.resume.summary.add');
    }

    public function SummaryEdit(){
        return view('backend.resume.summary.edit');
    }


    public function EduAdd(){
        return view('backend.resume.edu.add');
    }

    public function EduEdit(){
        return view('backend.resume.edu.edit');
    }


    public function ExpAdd(){
        return view('backend.resume.exp.add');
    }

    public function ExpEdit(){
        return view('backend.resume.exp.edit');
    }
}
