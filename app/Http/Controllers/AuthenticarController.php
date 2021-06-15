<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticarController extends Controller
{
    public function index()
    {
        if(Auth::user())
        {
            return  redirect()->intended('principal');
        }

        return redirect()->intended('login');
    }

    public function login()
    {
        $pageConfigs = ['bodyCustomClass' => 'login-bg', 'isCustomizer' => false];
        return view('authenticar',compact('pageConfigs'));
    }

    public function principal()
    {
        return view('home');
    }
}
