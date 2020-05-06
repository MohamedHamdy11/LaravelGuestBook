<?php
/**
 * Created by PhpStorm.
 * User: محمد حمدى
 * Date: 5/5/20
 * Time: 2:17 AM
 */

namespace App\Http\Controllers;


class messagesController extends controller
{

    public function getIndex()
    {
        return view('front.guestbook');
    }
    public function postAdd()
    {

    }
}