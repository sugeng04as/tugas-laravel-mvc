<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    
    public function regist()
    {
        return view('register');
    }

    public function wlcom(Request $tangkap)
    {
        $first=$tangkap["first"];
        $last=$tangkap["last"];
        return view('welcome', ['first'=> $first], ['last'=> $last]);
    }
}