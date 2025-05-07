<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_Mhs_Controller extends Controller
{
    public function index()
    {
        return view('login_mhs', ['title' => 'Login Mahasiswa | Myinternship']);
    }
}
