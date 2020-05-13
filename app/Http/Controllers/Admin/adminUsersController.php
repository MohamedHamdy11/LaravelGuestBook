<?php
/**
 * Created by PhpStorm.
 * User: محمد حمدى
 * Date: 5/5/20
 * Time: 2:40 AM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class adminUsersController extends Controller
{
    public function getAdmin()
    {
        //check login
        if(!\Auth::check())
            return redirect('/');


       return view('admin.index')
           ->with('title','Admin Panel');
    }

}