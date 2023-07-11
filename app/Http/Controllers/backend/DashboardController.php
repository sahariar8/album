<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
   public function index(){

      return view('backend/pages/dashboard');

   }
   public function special(){
      return view('backend.pages.special');
   }
   public function insert(Request $request){
      $picture = new Picture();
      $picture->title = $request->title;
      $picture->date = $request->date;
      $picture->desc = $request->desc;
      $img = $request->img;
      $imgName = $img->getClientOriginalName();
      $folder = 'backend/images/';
      $img->move($folder, $imgName);
      $picture->img = $folder.$imgName;

      $picture->save();
      return back()->with('msg','picture and details updated successfully');

   }
   public function manage(){
      $picture = Picture::all();
      return view('backend.pages.manage',compact('picture'));
   }
   public function destroy($x){
      $picture = Picture::find($x);
      if(file_exists($picture->img)){
         unlink($picture->img);
      }
      $picture->delete();
      return back()->with('msg','Image Deleted Successfully');
   }
   public function edit($id){
      $picture = Picture::find($id);
      return view('backend.pages.edit',compact('picture'));
   }
   public function update(Request $request, $id){
      $picture = Picture::find($id);
      $picture->title = $request->title;
      $picture->date = $request->date;
      $picture->desc = $request->desc;
      if($request->img){
         if(file_exists($picture->img)){
            unlink($picture->img);
         }
         $img = $request->img;
         $imgName = $img->getClientOriginalName();
         $folder = 'backend/images/';
         $img->move($folder, $imgName);
         $picture->img = $folder.$imgName;
      }
      $picture->save();
      return back()->with('msg','Picture Updated Successfully');

   }
  
}
