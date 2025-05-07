<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register_Dosen_Controller extends Controller
{
    public function index()
    {
        return view('register_dosen', ['title' => 'Register Dosen']);
    }
}
