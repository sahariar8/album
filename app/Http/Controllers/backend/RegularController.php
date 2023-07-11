<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Regular;
use Illuminate\Http\Request;

class RegularController extends Controller
{
    public function show(){
       return view('backend.regular.regular');
     }
     public function insert(Request $request){
        $regular = new Regular();
        $regular->title = $request->title;
        $regular->desc = $request->desc;
        $regular->date = $request->date;
        
        $img = $request->rimg;
        $imgName = $img->getClientOriginalName();
        $folder = 'backend/images/';
        $img->move($folder, $imgName);
        $regular->rimg = $folder.$imgName;

        $regular->save();

        return back()->with('msg','regular Pictures Updated Successfully');

     }
     public function manage(){
        $regular = Regular::all();
        return view('backend.regular.manage',compact('regular'));
     }
     public function destroy($x){
        $regular = Regular::find($x);

        if(file_exists($regular->rimg)){
            unlink($regular->rimg);
        }
        $regular->delete();
        return back()->with('msg','Regular Picture Deleted Successfully');
     }
     public function edit($id){
        $regular = Regular::find($id);
        return view('backend.regular.edit',compact('regular'));
     }
     public function update( Request $request, $id){
        $regular = Regular::find($id);
        $regular->title = $request->title;
        $regular->desc = $request->desc;
        $regular->date = $request->date;

        if($request->rimg){
            if(file_exists($regular->rimg)){
                unlink($regular->rimg);
            }
            $img = $request->rimg;
            $imgName = $img->getClientOriginalName();
            $folder = 'backend/images/';
            $img->move($folder,$imgName);
            $regular->rimg = $folder.$imgName;

        }
        $regular->save();
        return back()->with('msg','regularal picture Updated Successfully');

        
     }
}
