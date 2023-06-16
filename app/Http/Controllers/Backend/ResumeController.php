<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function View(){
        return view('backend.resume.view');
    }

    public function Add(){
        return view('backend.resume.add');
    }

    public function Edit(){
        return view('backend.resume.edit');
    }
}
