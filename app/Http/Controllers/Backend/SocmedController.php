<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocmedController extends Controller
{
    public function View(){
        return view('backend.socmed.view');
    }

    public function Add(){
        return view('backend.socmed.add');
    }

    public function Edit(){
        return view('backend.socmed.edit');
    }
}
