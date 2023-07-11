<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Occasion;
use Illuminate\Http\Request;


class OccasionController extends Controller
{
    public function show(){
        return view('backend.pages.occasion');
     }
     public function insert(Request $request){
        $occasion = new Occasion();
        $occasion->title = $request->title;
        $occasion->desc = $request->desc;
        $occasion->date = $request->date;
        
        $img = $request->oimg;
        $imgName = $img->getClientOriginalName();
        $folder = 'backend/images/';
        $img->move($folder, $imgName);
        $occasion->oimg = $folder.$imgName;

        $occasion->save();

        return back()->with('msg','Occasion Pictures Updated Successfully');

     }
     public function manage(){
        $occasion = Occasion::all();
        return view('backend.pages.omanage',compact('occasion'));
     }
     public function destroy($x){
        $occasion = Occasion::find($x);

        if(file_exists($occasion->oimg)){
            unlink($occasion->oimg);
        }
        $occasion->delete();
        return back()->with('msg','occasion Deleted Successfully');
     }
     public function edit($id){
        $occasion = occasion::find($id);
        return view('backend.pages.oedit',compact('occasion'));
     }
     public function update( Request $request, $id){
        $occasion = Occasion::find($id);
        $occasion->title = $request->title;
        $occasion->desc = $request->desc;
        if($request->oimg){
            if(file_exists($occasion->oimg)){
                unlink($occasion->oimg);
            }
            $img = $request->oimg;
            $imgName = $img->getClientOriginalName();
            $folder = 'backend/images/';
            $img->move($folder,$imgName);
            $occasion->oimg = $folder.$imgName;

        }
        $occasion->save();
        return back()->with('msg','occasional picture Updated Successfully');

        
     }
}
