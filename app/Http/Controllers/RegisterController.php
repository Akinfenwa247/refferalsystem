<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Cookie;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function sign_up(Request $request)
    {

       /*validating user input*/
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        /*storing new user in the db*/
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'affiliate_id' => str_random(10),
            'referred_by'=> $request['referred_by'],
        ]);
        return redirect()->route('login')->with('status', 'Registration Successful, Please Provide Your Credentials To Login');
    }



    /*registration for referred user*/

    public function referred_sign_up($id)
    {
        $referral_id= $id;
        return view('auth.register2', compact('referral_id'));
    }
}