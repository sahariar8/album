@extends('frontend.master.fmastering')

@section('promo')
<div class="container">
    <div class="row">
        <div class="album" style="height:800px; width:100%;">
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
        </div>
    </div>
</div>
@endsection