@extends('layouts.master')
@section('title')
星捷航空
@endsection

@section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->imagePath }}" alt="..." class="img-responsive">
                    <div class="caption">
                        <div class="caption">
                            <h3>{{$product->title }}</h3>
                        </div>
                        <p class="description">{{$product->description }}</p>
                        <div class="clearfix">
                            <div class="pull-left price">{{$product->price }}</div>
                            <a href="{{route('product.addToCart',['id' => $product->id])}}" class="btn btn-success pull-right" role="button">購買</a>
                        </div>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    @endforeach
@endsection