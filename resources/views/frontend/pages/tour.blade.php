@extends('frontend.master.fmastering')
@section('images')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Show Tour Picture</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area" style="min-height: 658px">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            @foreach ($tour as $t)
            <div class="col-md-3 col-sm-6">
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="{{asset('/')}}{{$t->timg}}" alt="" style="height: 300px; width:260px">
                        <div class="product-hover">
                            <a href="{{route('tdetails',$t->id)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                        </div>
                    </div>
                    
                    <h2 class="text-primary">{{$t->title}}</h2>
                </div>
            </div>
            @endforeach   
        </div>
    </div>
</div>
@endsection