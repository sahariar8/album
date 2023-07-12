<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Occasion;
use App\Models\Picture;
use App\Models\Regular;
use App\Models\Tour;
use Illuminate\Http\Request;


class DetailsController extends Controller
{
    public function details($id){
        $picture = Picture::find($id);
        return view('frontend.details.details',compact('picture'));
    }
    public function odetails($id){
        $occasion = Occasion::find($id);
        return view('frontend.details.odetails',compact('occasion'));
    }
    public function rdetails($id){
        $regular = Regular::find($id);
        return view('frontend.details.rdetails',compact('regular'));
    }
    public function tdetails($id){
        $tour = Tour::find($id);
        return view('frontend.details.tdetails',compact('tour'));
    }
}
