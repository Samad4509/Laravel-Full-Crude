<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products,$product;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addProduct()
    {
        return view('product.add');
    }
    public function create(Request $request)
    {
        Product::newProduct($request);
        return back()->with('message','Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(Request $request)
    {

        $this->products=Product::all();
        return view('product.manage',['products'=>$this->products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->product=Product::find($id);
        return view('product.edit',['product'=>$this->product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
       Product::updateProduct($request,$id);
       return redirect('/manage-product')->with('message','successfully update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::deleteProduct($id);
        return back()->with('message','Delete successfull');
    }
}
