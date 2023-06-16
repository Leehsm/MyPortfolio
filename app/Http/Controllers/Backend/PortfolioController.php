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
}
