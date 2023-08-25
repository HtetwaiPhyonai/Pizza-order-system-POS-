<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
