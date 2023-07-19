@extends('backend.master.bmastering')
@section('manage')
<div class="containre">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-primary text-center py-5" style="font-family: roboto">Show All Special Picture & Details</h1>
            <h2 class="text-center text-danger">{{Session::get('msg')}}</h2>
            <table class="table table-bordered py-5">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date & Time</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach ($picture as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->title}}</td>
                        <td><textarea name="" id="" cols="auto" rows="auto">{{$p->desc}}</textarea></td>
                        <td>{{$p->date}}</td>
                        <td><img src="{{asset('/')}}{{$p->img}}" alt="" height="70px" width="60px"></td>
                        <td>
                            <a href="{{route('edit',$p->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('destroy',$p->id)}}" class="btn btn-danger" onclick="return confirm('Are you Sure to Delete this Picture?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection