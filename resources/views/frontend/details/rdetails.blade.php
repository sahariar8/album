@extends('frontend.master.fmastering')
@section('details')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Picture Details</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
         
            <div class="col-md-4 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="{{asset('/')}}{{$regular->rimg}}" alt="" style="height: 400px; width:350px">
                    </div>                
                </div>
            </div>

            
            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">   
                            </div>
                        </div>
                                <div role="tabpanel">
        
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                    </ul>
                                  
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h1 class="text-primary">{{$regular->title}}</h1>  
                                            <p>{{$regular->desc}}</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>  
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection