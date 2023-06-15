<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function View(){
        return view('backend.about.view');
    }

    public function Add(){
        return view('backend.about.add');
    }

    public function Edit(){
        return view('backend.about.edit');
    }
}
