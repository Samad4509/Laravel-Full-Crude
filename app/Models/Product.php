<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class Product extends Model
{
    use HasFactory;
    private static $product,$image, $imageName,$directory,$imageUrl ;
    public static function imageUpload($request)
    {
        self::$image      =$request->file('product_image');
        self::$imageName  =self::$image->getClientOriginalName();
        self::$directory  ="img/upload/";
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newProduct($request)
    {
        self::$imageUrl=self::imageUpload($request);
        self::$product=new Product();
        self::$product->product_name=$request->product_name;
        self::$product->product_category=$request->product_category;
        self::$product->product_brand=$request->product_brand;
        self::$product->product_price=$request->product_price;
        self::$product->product_image=self::$imageUrl;
        self::$product->product_description=$request->product_description;
        self::$product->save();
    }
    public static function updateProduct($request,$id)
    {
        self::$product=Product::find($id);
        if($request->file('product_image'))
        {
            if(file_exists(self::$product->product_image))
            {
                unlink(self::$product->product_image);
            }
        }
        else
        {
            self::$imageUrl=self::$product->product_image;
        }
        self::$product->product_name=$request->product_name;
        self::$product->product_category=$request->product_category;
        self::$product->product_brand=$request->product_brand;
        self::$product->product_price=$request->product_price;
        self::$product->product_image=self::$imageUrl;
        self::$product->product_description=$request->product_description;
        self::$product->update();
    }
    public static function deleteProduct($id)
    {
        self::$product=Product::find($id);
        if(file_exists(self::$product->product_image))
        {
            unlink(self::$product->product_image);
        }
        self::$product->delete();
    }

}
