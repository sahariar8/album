@extends('backend.master.bmastering')
@section('special')
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-primary py-5 text-center">Edit Tour Picture</h1>
                <h2 class="text-success text-center">{{Session::get('msg')}}</h2>
                <form action="{{route('tour.update',$tour->id)}}" method="post" enctype="multipart/form-data" class="border p-5 rounded">
                    @csrf
                    <div class="form-group my-2">
                      <label for="title" class="my-2"><b>Image Title :</b></label>
                      <input type="text" class="form-control" name="title" value="{{$tour->title}}">
                    </div>
                    <div class="form-group my-2">
                      <label for="date" class="my-2"><b>Date :</b></label>
                      <input type="datetime-local" class="form-control" name="date" value="{{$tour->date}}">
                    </div>
                    <div class="form-group my-2">
                      <label for="desc" class="my-2"><b>Image Description :</b></label>
                      <input type="text" class="form-control" name="desc" value="{{$tour->desc}}">
                    </div>
                    <div class="form-group my-2">
                        <label for="img" class="my-2"><b>Existing Image :</b></label>
                        <img src="{{asset('/')}}{{$tour->timg}}" alt="" height="80px" width="100px">
                    </div>
                    <div class="form-group my-2">
                      <label for="date" class="my-2"><b>Image :</b></label>
                      <input type="file" class="form-control" name="timg">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
   </div>
@endsection