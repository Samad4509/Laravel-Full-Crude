@extends('master')
@section('title')
    Home Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <img src="{{asset($product->product_image)}}"/>
{{--                            <div class="card card-img-overlay"></div>--}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4>{{$product->product_name}}</h4>
                            <h4>Tk.{{$product->product_price}}</h4>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
