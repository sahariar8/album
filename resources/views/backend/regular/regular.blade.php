@extends('backend.master.bmastering')
@section('special')
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-primary py-5 text-center" style="font-family: roboto">Insert Regular Picture</h1>
                <h2 class="text-success text-center">{{Session::get('msg')}}</h2>
                <form action="{{route('regular.insert')}}" method="post" enctype="multipart/form-data" class="border p-5 rounded">
                    @csrf
                    <div class="form-group my-2">
                      <label for="title" class="my-2"><b>Image Title :</b></label>
                      <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group my-2">
                      <label for="date" class="my-2"><b>Date</b></label>
                      <input type="datetime-local" class="form-control" name="date" required>
                    </div>
                    <div class="form-group my-2">
                      <label for="desc" class="my-2"><b>Image Description</b></label>
                      <input type="text" class="form-control" name="desc" required>
                    </div>
                    <div class="form-group my-2">
                      <label for="date" class="my-2"><b>Image :</b></label>
                      <input type="file" class="form-control" name="rimg" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
   </div>
@endsection