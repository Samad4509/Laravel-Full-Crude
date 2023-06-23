<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $product,$singleProduct;
    public function index()
    {
        $this->product=Product::all();
        return view('home',['products'=>$this->product]);
    }
    public function detail($id)
    {
        $this->singleProduct=Product::find($id);
        return view('detail',['product'=>$this->singleProduct]);
    }
}
