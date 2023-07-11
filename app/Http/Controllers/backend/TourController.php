<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;


class TourController extends Controller
{
    public function show(){
        return view('backend.tour.tour');
     }
     public function insert(Request $request){
        $tour = new Tour();
        $tour->title = $request->title;
        $tour->desc = $request->desc;
        $tour->date = $request->date;
        
        $img = $request->timg;
        $imgName = $img->getClientOriginalName();
        $folder = 'backend/images/';
        $img->move($folder, $imgName);
        $tour->timg = $folder.$imgName;

        $tour->save();

        return back()->with('msg','tour Pictures Updated Successfully');

     }
     public function manage(){
        $tour = Tour::all();
        return view('backend.tour.manage',compact('tour'));
     }
     public function destroy($x){
        $tour = Tour::find($x);

        if(file_exists($tour->timg)){
            unlink($tour->timg);
        }
        $tour->delete();
        return back()->with('msg','tour Deleted Successfully');
     }
     public function edit($id){
        $tour = Tour::find($id);
        return view('backend.tour.edit',compact('tour'));
     }
     public function update( Request $request, $id){
        $tour = Tour::find($id);
        $tour->title = $request->title;
        $tour->desc = $request->desc;
        if($request->timg){
            if(file_exists($tour->timg)){
                unlink($tour->timg);
            }
            $img = $request->timg;
            $imgName = $img->getClientOriginalName();
            $folder = 'backend/images/';
            $img->move($folder,$imgName);
            $tour->timg = $folder.$imgName;

        }
        $tour->save();
        return back()->with('msg','toural picture Updated Successfully');

        
     }
}
