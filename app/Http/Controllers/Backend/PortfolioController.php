<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function View(){
        return view('backend.portfolio.view');
    }

    public function Add(){
        return view('backend.portfolio.add');
    }

    public function Edit(){
        return view('backend.portfolio.edit');
    }


    

    public function ProjAdd(){
        return view('backend.portfolio.proj.add');
    }

    public function ProjEdit(){
        return view('backend.portfolio.proj.edit');
    }
}
