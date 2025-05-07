<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register_Perusahaan_Controller extends Controller
{
    public function index()
    {
        return view('register_perusahaan', ['title' => 'Register Perusahaan']);
    }
}
