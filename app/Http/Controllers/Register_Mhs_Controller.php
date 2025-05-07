<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register_Mhs_Controller extends Controller
{
    public function index()
    {
        return view('register_mhs', ['title' => 'Register Mahasiswa']);
    }
}
