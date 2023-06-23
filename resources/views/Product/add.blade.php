@extends('master')
@section('title')
    Add Product Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                   <div class="card">
                       <h1 class="text-center text-success">Add Product Program</h1>
                       <hr/>
                       <div class="card-body">
                           <form action="{{route('add-product')}}" method="Post" enctype="multipart/form-data">
                               <p class="text-center text-success">{{session('message')}}</p>
                               @csrf
                               <div class="row mb-4">
                                   <label class="col-md-3">Product Name</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="product_name"/>
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label class="col-md-3">Product Category</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="product_category"/>
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label class="col-md-3">Product Brand</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="product_brand"/>
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label class="col-md-3">Product Price</label>
                                   <div class="col-md-9">
                                       <input type="number" class="form-control" name="product_price"/>
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label class="col-md-3">Product Image</label>
                                   <div class="col-md-9">
                                       <input type="file" class="form-control" name="product_image"/>
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label class="col-md-3">Product Description</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="product_description"/>
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label class="col-md-3">Product Name</label>
                                   <div class="col-md-9">
                                       <input type="text" class="form-control" name="product_name"/>
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label class="col-md-3"></label>
                                   <div class="col-md-9">
                                       <input type="submit" class="btn btn btn-success" value="Submit"/>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
@endsection

