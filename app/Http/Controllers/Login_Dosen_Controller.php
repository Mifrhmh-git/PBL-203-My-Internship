<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_Dosen_Controller extends Controller
{
    public function index()
    {
        return view('login_dosen', ['title' => 'Login Dosen | Myinternship']);
    }
}
