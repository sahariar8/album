<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;


class SliderController extends Controller
{
    public function slider(){
        return view('backend.pages.slider');
     }
     public function insert(Request $request){
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->desc = $request->desc;
        
        $img = $request->simg;
        $imgName = $img->getClientOriginalName();
        $folder = 'backend/images/';
        $img->move($folder, $imgName);
        $slider->simg = $folder.$imgName;

        $slider->save();

        return back()->with('msg','Slider Updated Successfully');

     }
     public function manage(){
        $slider = Slider::all();
        return view('backend.pages.slidermanage',compact('slider'));
     }
     public function destroy($x){
        $slider = Slider::find($x);

        if(file_exists($slider->simg)){
            unlink($slider->simg);
        }
        $slider->delete();
        return back()->with('msg','Slider Deleted Successfully');
     }
     public function edit($id){
        $slider = Slider::find($id);
        return view('backend.pages.slideredit',compact('slider'));
     }
     public function update( Request $request, $id){
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->desc = $request->desc;
        if($request->simg){
            if(file_exists($slider->simg)){
                unlink($slider->simg);
            }
            $img = $request->simg;
            $imgName = $img->getClientOriginalName();
            $folder = 'backend/images/';
            $img->move($folder,$imgName);
            $slider->simg = $folder.$imgName;

        }
        $slider->save();
        return back()->with('msg','Slider Updated Successfully');

        
     }
}
