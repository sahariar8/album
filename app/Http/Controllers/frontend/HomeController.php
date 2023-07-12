<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\picture;
use App\Models\Regular;
use App\Models\Occasion;
use App\Models\Tour;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $slider = new Slider();
        $slider = Slider::all();
        $picture = new Picture();
        $picture = Picture::all();
        $regular = new Regular();
        $regular = Regular::all();
        $occasion = new Occasion();
        $occasion = Occasion::all();
        $tour = new Tour();
        $tour = Tour::all();
        return view('frontend.pages.home',compact('slider','picture','regular','occasion','tour'));
    }
    public function special(){
        $picture = new Picture();
        $picture = Picture::all();
        return view('frontend.pages.special',compact('picture'));

    }
    public function occasion(){
        $occasion = new Occasion();
        $occasion = Occasion::all();
        return view('frontend.pages.occasion',compact('occasion'));
    }
    public function regular(){
        $regular = new Regular();
        $regular = Regular::all();
        return view('frontend.pages.regular',compact('regular'));
    }
    public function tour(){
        $tour = new Tour();
        $tour = Tour::all();
        return view('frontend.pages.tour',compact('tour'));
    }
    public function album(){
        return view('frontend.pages.album');
    }
   
    
}
