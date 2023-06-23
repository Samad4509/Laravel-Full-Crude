@extends('master')
@section('title')
    Mange Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="card card-body">
                       <p class="text-center text-danger">{{session('message')}}</p>
                       <table class="table table-bordered">
                           <thead>
                               <tr class="text-center">
                                   <th>SL</th>
                                   <th>NAME</th>
                                   <th>CATEGORY</th>
                                   <th>BRAND</th>
                                   <th>PRICE</th>
                                   <th>IMAGE</th>
                                   <th>DESCRIPTION</th>
                                   <th>ACTION</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($products as $product)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_category}}</td>
                                    <td>{{$product->product_brand}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>
                                        <img src="{{asset($product->product_image)}}" alt="" height="100" width="120">
                                    </td>
                                    <td>{{$product->product_description}}</td>
                                    <td>
                                        <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure to delete this')">Delete</a>
                                    </td>
                                </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </section>
@endsection
