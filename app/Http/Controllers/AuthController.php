<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //redirect login page
   
    public function loginPage()
    {
        return view('login');
    }

    //redirect register page 

    public function registerPage()
    {
        return view('register');
    }

    public function deshboard ()
    {
        if(Auth::user()->role === 'admin'){
            return redirect()->route('category#list');
        };
        return redirect()->route('user#list');
    }
}
