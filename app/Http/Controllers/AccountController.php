<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
use App\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password =$request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            if(Auth::attempt(['email' => $email, 'password' => $password,'usertype'=>'admin']))
            {
                Session::put(['email'=>$email,'type'=>'admin']);
                return Redirect::intended('/home');
            }else{
                Session::put(['email'=>$email,'type'=>'user']);
                return Redirect::intended('/home');
            }

        }else{
            Session::flash('error', 'Invalid Username or Password');
            //return Redirect::intended('/');

            return Redirect::intended('/');
        }
    }

    public function register(Request $request)
    {
        $user = new Users;

        $user->email = Input::get('email');
        $email=Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->fname=Input::get('fname');
        $user->contactaddress=Input::get('pnumber');
        $user->address=Input::get('contactaddress');
        $user->usertype='user';
        $user->save();
        Session::put(['email'=>$email,'type'=>'user']);
        return Redirect::intended('/home');
    }
    public function logout(Request $request)
    {
        //Auth::logout();
        Session::forget('email');
        Session::forget('type');
        return Redirect::intended('/');

    }
}