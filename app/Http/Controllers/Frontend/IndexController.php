<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\About;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\PortfolioDesc;
use App\Models\Resume;
use App\Models\ResumeEdu;
use App\Models\ResumeExperience;
use App\Models\ResumeSummary;
use App\Models\Skill;
use App\Models\Socmed;
use App\Models\Message;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function Index(){
        $about = About::get();
        $contact = Contact::get();
        $portfolio = Portfolio::get();
        $portfoliodesc = PortfolioDesc::get();
        $resume = Resume::get();
        $resumeedu = ResumeEdu::get();
        $resumeexp = ResumeExperience::get();
        $resumesum = ResumeSummary::get();
        $skill1 = Skill::take(5)->get();
        $skill2 = Skill::skip(5)->take(5)->get();
        $socmed = Socmed::get();

        return view('frontend.index', compact('about', 'contact', 'portfolio', 'portfoliodesc', 'resume', 'resumeedu', 'resumeexp', 'resumesum', 'skill1', 'skill2', 'socmed'));
    }

    public function Message(Request $request){
        Message::insert([
           'name' => $request->name,
           'email' => $request->emial,
           'subject' => $request->subject,
           'message' => $request->message,
           'created_at' => Carbon::now(),
        ]);

        return view('frontend.index');
    }
}
