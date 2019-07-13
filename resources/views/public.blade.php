@extends('front')
@section('content')
<!-- <div class="container"> -->
    <section class="page">
        <div class="row ml-4 mr-4">
        
        @foreach($product as $p)
            <div class="col-sm-3">
                <div class="card" style="width:300px; height: 450px; padding: 10px">
                    <div class="card-header bg-transparent">
                        <a href="{{route('admin.products.show', $p->id)}}" class="nav-link text-dark">
                    <img src="{{ asset('/images/'. $p->images()->first()->image_src) }}" class=""  style="width:200px; height: 200px">
                      </a>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a href="{{route('admin.products.show', $p->id)}}" class="nav-link text-dark">{{$p->name}}</a>
                            
                            @if($p->review->count(0))
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            
                            @endif
                            <br>
                            <div class="btn btn-primary btn-mini">Rp. {{$p->price}}</div>
                       
                        <br><br>
                        <a href="{{ route('carts.add',$p->id) }}" class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
        </div>
    </section>
    
   
@endsection