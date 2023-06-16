<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\About;
use App\Models\MultiSkill;
use Carbon\Carbon;

class SkillController extends Controller
{
    public function Add(){
        return view('backend.about.add');
    }

    public function Store(Request $request){
        About::insert([
            'skill_desc' => $request->skill_desc
    	]);
        // $skills = $request->;
        // foreach ($skills as $skill) {
            // MultiSkill::insert([
            //    
            // ]);
    }
    
    public function Edit(){
        return view('backend.about.edit');
    }
}
