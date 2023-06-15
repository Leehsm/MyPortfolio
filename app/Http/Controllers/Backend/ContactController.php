<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function View(){
        return view('backend.contact.view');
    }

    public function Add(){
        return view('backend.contact.add');
    }

    public function Edit(){
        return view('backend.contact.edit');
    }
}
