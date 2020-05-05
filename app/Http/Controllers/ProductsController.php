<?php

namespace App\Http\Controllers;

use App\models\Products;

class ProductsController extends Controller
{
    public function getIndex()
    {

        $products = Products::all();
        return view('products')
            ->with('title','our products')
            ->with('products',$products)
            ->with('errors',['name is required','password is required']);

        /*
        //return Products::all();
        //return Products::find(1);

        //$product = new Products();
       // return Products::where('id','<',0)->where('available','=',0)->get();

        /*

        $product = Products::find(0);
        $product->title = 'M';
        $product->description = 'this is test laravel';
        $product->price =5155;
        $product->available = 0;
        $product->save();
        //$product->delete();
        */

    }

    public function getProduct($id=0)
    {

    }


}