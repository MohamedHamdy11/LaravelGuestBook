<?php


namespace App\Http\Controllers;


use App\models\Users;

class usersController extends controller
{
    public function getLogin()
    {
        /*
        $user = Users::find(1);
        $user->password = \Hash::make('01226497712');
        $user->save();
        */

        return view('front.login')
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
            if(\Auth::attempt(['username'=>\Input::get('username'),'password'=>\Input::get('password')]))
                return redirect('admin');
            else
            {
                return redirect()
                    ->back()
                    ->with('title','Login Now')
                    ->with('errors',['Invalid username & password']);
            }
        }
        else
        {
            $errors = $validation->errors()->all();
            return redirect()
                ->back()
                ->with('title','Login Now')
                ->with('errors',$errors);

        }


    }




}