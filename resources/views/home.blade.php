@extends('master')
@section('title')
    Home Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset($product->product_image)}}" alt="" height="400" width="420">
                        <div class="card-body">
                            <h4>{{$product->product_name}}</h4>
                            <h4>{{$product->product_price}}</h4>
                            <hr/>
                            <a href="{{route('detail',['id'=>$product->id])}}" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
