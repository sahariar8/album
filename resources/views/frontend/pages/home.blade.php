@extends('frontend.master.fmastering')
@section('slider')
<div class="slider-area" style="width: 60%;">
    <!-- Slider -->
    <div class="block-slider block-slider4">
    
        <ul id="bxslider-home4">
            @foreach ($slider as $s)
            <div class="row d-flex justify-content-between">
                <div class="col-md-5">
                    <li>
                        <img src="{{asset('/')}}{{$s->simg}}" alt="Slide" style="width: 100%; height:400px; margin-left:135px; border-radius:5%">
                </div>
            
                <div class="col-md-4 ">
                    <div class="caption-group " style="margin-top: 100px;">
                        <h2 class="caption title text-primary">
                           {{$s->title}}
                        </h2>
                        <h5 class="caption subtitle">{{$s->desc}}</h5>
                    </div>
                </li>
                </div>

            </div>
            
                
            @endforeach
        </ul>
       
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->
@endsection

@section('promo')
<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-heart"></i>
                        <a href="{{route('fspecial')}}" style="color: white; text-decoration:none"><p>Special</p></a>
                    </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa-solid fa-face-smile"></i>
                    <a href="{{route('foccasion')}}"  style="color: white; text-decoration:none"><p>Occasions</p></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa-solid fa-calendar-day"></i>
                    <a href="{{route('fregular')}}"  style="color: white; text-decoration:none"><p>Regular</p></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa-solid fa-face-laugh-wink"></i>
                    <a href="{{route('ftour')}}"  style="color: white; text-decoration:none"><p>Tour</p></a>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- End promo area -->
@endsection
@section('brands')
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                       @foreach ($picture as $p)

                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('/')}}{{$p->img}}" alt="" style="height:250px">
                            </div>
                            
                            <h2>{{$p->title}}</h2>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- End main content area -->
@endsection
@section('images')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Show All Images</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            @foreach ($picture as $p)
            <div class="col-md-3 col-sm-6">
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="{{asset('/')}}{{$p->img}}" alt="" style="height: 300px; width:260px">
                    </div>
                    
                    <h2 class="text-primary">{{$p->title}}</h2>
                </div>
            </div>
            @endforeach   
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($occasion as $o)
            <div class="col-md-3 col-sm-6">
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="{{asset('/')}}{{$o->oimg}}" alt="" style="height: 300px; width:260px">
                    </div>
                    
                    <h2 class="text-primary">{{$o->title}}</h2>
                </div>
            </div>
            @endforeach   
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($regular as $r)
            <div class="col-md-3 col-sm-6">
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="{{asset('/')}}{{$r->rimg}}" alt="" style="height: 300px; width:260px">
                    </div>
                    
                    <h2 class="text-primary">{{$r->title}}</h2>
                </div>
            </div>
            @endforeach   
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($tour as $t)
            <div class="col-md-3 col-sm-6">
                <div class="single-product">
                    <div class="product-f-image">
                        <img src="{{asset('/')}}{{$t->timg}}" alt="" style="height: 300px; width:260px">
                    </div>
                    
                    <h2 class="text-primary">{{$t->title}}</h2>
                </div>
            </div>
            @endforeach   
        </div>
    </div>
</div>

@endsection