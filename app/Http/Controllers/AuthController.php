<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function login()
    {
        //dd(Hash::make(12345678));
        if(!empty(Auth::check()))
        {
            return redirect('admin/dashboard');
        }
        return view('auth.login');
    }
    public function Authlogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt([
            'email'=> $request->email,
            'password'=>$request->password], $remember))
            {
                return redirect('admin/dashboard');
            }
                else{
                    return redirect()->back()->with('error', 'Please enter valid email and password');
                }
            }
            public function logout()
            {
                Auth::logout();
                return redirect(url(''));
            }
    }

