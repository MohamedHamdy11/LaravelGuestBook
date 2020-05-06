<?php

namespace App\Http\Controllers;

use App\models\Products;

class ProductsController extends Controller
{
    public function getIndex()
    {
        return view('front.products');

        /*
         $products = Products::all();
        return view('products')
            ->with('title','our products')
            ->with('products',$products)
            ->with('errors',['name is required','password is required']);
        */
    }

    public function getProduct($id=0)
    {

        return view('front.product');
    }


}