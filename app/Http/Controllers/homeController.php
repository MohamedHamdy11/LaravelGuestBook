<?php
/**
 * Created by PhpStorm.
 * User: محمد حمدى
 * Date: 5/5/20
 * Time: 2:09 AM
 */

namespace App\Http\Controllers;

use App\models\Products;

class homeController extends Controller
{
    public function getIndex()
    {
        $allProducts = Products::orderBy('id','DESC')->limit(3)->get();

        return view('front.index')
            ->with('title','Guest Book')
            ->with('products',$allProducts);

    }

}