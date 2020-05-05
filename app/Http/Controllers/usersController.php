<?php


namespace App\Http\Controllers;


class usersController extends controller
{
    public function getLogin()
    {
        return view('login')
            ->with('title','Login Now');
    }

    public function postLogin()
    {
        //echo 'Data Submitted';

        $rules =array(
            'username' => 'required|min:3|max:20',
            'password' => 'required|min:3|max:20',
        );

        $validation = \Validator::make(\Input::all(),$rules);

        if ($validation->passes())
        {
           // return redirect('bl7'); // this is ues error
            echo 'ooooooooo';
        }
        else
        {
            $errors = $validation->errors()->all();
            return view('login')
                ->with('title','Login Now')
                ->with('errors',$errors);

        }


    }




}