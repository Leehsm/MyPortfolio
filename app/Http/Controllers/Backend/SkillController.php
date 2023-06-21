<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\skill;
use Carbon\Carbon;

class SkillController extends Controller
{
    public function View(){
        $skill = Skill::get();
        return view('backend.skill.view', compact('skill'));
    }

    public function Add(){
        return view('backend.skill.add');
    }

    public function Store(Request $request){
        Skill::insert([
            'skill' => $request->skill,
            'level' => $request->level,
            'percentage' => $request->percentage,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'skill Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('skill-view')->with($notification);
    }
    
    public function Edit($id){
        $skill = Skill::findOrFail($id);
        return view('backend.skill.edit', compact('skill'));
    }

    public function Update(Request $request){
        Skill::findOrFail($request->id)->update([
            'skill' => $request->skill,
            'level' => $request->level,
            'percentage' => $request->percentage,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Skill Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('skill-view')->with($notification);
    }
}
