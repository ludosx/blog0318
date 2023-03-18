<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterCreate extends Controller
{

    public function __invoke(Request $request)
    {

        return view('register');
    }
}
