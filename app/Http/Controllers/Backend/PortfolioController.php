<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioDesc;
use Carbon\Carbon;
use Image;

class PortfolioController extends Controller
{
    public function View(){
        $desc = PortfolioDesc::get();
        $proj = Portfolio::get();
        return view('backend.portfolio.view', compact('desc','proj'));
    }

    public function Add(){
        return view('backend.portfolio.add');
    }

    public function Store(Request $request){
        // dd($request->desc);
        PortfolioDesc::insert([
            'description' => $request->desc,
            'created_at' =>  Carbon::now()
    	]);

	    $notification = array(
			'message' => 'Description Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('portfolio-view')->with($notification);
    }

    public function Edit($id){
        $desc = PortfolioDesc::findOrFail($id);
        return view('backend.portfolio.edit', compact('desc'));
    }

    public function Update(Request $request){
        PortfolioDesc::findOrFail($request->id)->update([
            'description' => $request->desc,
            'updated_at' =>  Carbon::now()
        ]);

        $notification = array(
			'message' => 'Description Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('portfolio-view')->with($notification);
    }


    

    public function ProjAdd(){
        return view('backend.portfolio.proj.add');
    }

    public function ProjStore(Request $request){
        $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(800,600)->save('upload/portfolio/'.$name_gen);
    	$save_url = 'upload/portfolio/'.$name_gen;

        Portfolio::insert([
            'image' => $save_url,
            'project_desc' => $request->desc,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
			'message' => 'Project Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('portfolio-view')->with($notification);
        
    }

    public function ProjEdit($id){
        $proj = Portfolio::findOrFail($id);
        return view('backend.portfolio.proj.edit', compact('proj'));
    }

    public function ProjUpdate(Request $request){
        $old_img = $request->old_img;
        // dd($request->image);
        if ($request->image) {
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(800,600)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;

            Portfolio::findOrFail($request->id)->update([
                'image' => $save_url,
                'project_desc' => $request->desc,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Project Updated Successfully',
                'alert-type' => 'success'
            );

        }else{
            Portfolio::findOrFail($request->id)->update([
                // 'image' => $request->image,
                'project_desc' => $request->desc,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Project Updated Successfully',
                'alert-type' => 'success'
            );
        }

		return redirect()->route('portfolio-view')->with($notification);
    }
    
}
