<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_Perusahaan_Controller extends Controller
{
    public function index()
    {
        return view('login_perusahaan', ['title' => 'Login Perusahaan | Myinternship']);
    }
}
