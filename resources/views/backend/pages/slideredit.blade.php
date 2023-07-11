@extends('backend.master.bmastering')
@section('special')
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-primary py-5 text-center" style="font-family: roboto">Edit Slider Details</h1>
                <h2 class="text-success text-center">{{Session::get('msg')}}</h2>
                <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data" class="border p-5 rounded">
                    @csrf
                    <div class="form-group my-2">
                      <label for="title" class="my-2"><b>Image Title :</b></label>
                      <input type="text" class="form-control" name="title" value="{{$slider->title}}">
                    </div>
                    <div class="form-group my-2">
                      <label for="desc" class="my-2"><b>Image Description</b></label>
                      <input type="text" class="form-control" name="desc" value="{{$slider->desc}}">
                    </div>
                    <div class="form-group my-2">
                        <label for="img" class="my-2"><b>Existing Image</b></label>
                        <img src="{{asset('/')}}{{$slider->simg}}" alt="" height="80px" width="100px">
                    </div>
                    <div class="form-group my-2">
                      <label for="simg" class="my-2"><b>Image :</b></label>
                      <input type="file" class="form-control" name="simg">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
   </div>
@endsection