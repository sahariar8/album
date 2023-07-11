<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }
    public function special(){
        return view('frontend.pages.special');
    }
    public function occasion(){
        return view('frontend.pages.occasion');
    }
    public function regular(){
        return view('frontend.pages.regular');
    }
    public function tour(){
        return view('frontend.pages.tour');
    }
    
}
