<?php
/**
 * Created by PhpStorm.
 * User: محمد حمدى
 * Date: 5/5/20
 * Time: 2:09 AM
 */

namespace App\Http\Controllers;


class homeController extends usersController
{
    public function getIndex()
    {

        return view('front.index');

    }

}