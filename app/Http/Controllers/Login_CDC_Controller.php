<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login_CDC_Controller extends Controller
{
    public function index()
    {
        return view('login_cdc', ['title' => 'Login CDC | Myinternship']);
    }
}
