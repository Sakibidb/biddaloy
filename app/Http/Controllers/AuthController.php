<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Str;

class AuthController extends Controller
{
    public function login()
    {
        //dd(Hash::make(12345678));
        if(!empty(Auth::check()))
        {
            if(Auth::user()->user_type == 1)
                {
                    return redirect('admin/dashboard');
                }
                else if(Auth::user()->user_type == 2)
                {
                    return redirect('teacher/dashboard');
                }
                else if(Auth::user()->user_type == 3)
                {
                    return redirect('student/dashboard');
                }
                else if(Auth::user()->user_type == 4)
                {
                    return redirect('parent/dashboard');
                }
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
                if(Auth::user()->user_type == 1)
                {
                    return redirect('admin/dashboard');
                }
                else if(Auth::user()->user_type == 2)
                {
                    return redirect('teacher/dashboard');
                }
                else if(Auth::user()->user_type == 3)
                {
                    return redirect('student/dashboard');
                }
                else if(Auth::user()->user_type == 4)
                {
                    return redirect('parent/dashboard');
                }
                
            }
                else{
                    return redirect()->back()->with('error', 'Please enter valid email and password');
                }
            }
            public function forgotpassword()
            {
                return view('auth.forgot');
            }

            public function postforgotpassword(Request $request)
            {
                //dd($request->all());
                $checkEmailSingle = User::getEmailSingle($request->email);
                //dd($checkEmailSingle);
                if(!empty($user))
                {
                    $user->remember_token = Str::random(30);
                    $user->save();
                    Mail::to($user->email)->send(new ForgotPasswordMail($user));
                    return redirect()->back()->with('success', "Check your mail for password.");
                }
                else
                {
                    return redirect()->back()->with('error', "Email not found in this system.");
                }

            }
            public function logout()
            {
                Auth::logout();
                return redirect(url(''));
            }
    }

