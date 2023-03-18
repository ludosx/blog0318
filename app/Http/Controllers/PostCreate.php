<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostCreate extends Controller
{

    public function __invoke(Request $request)
    {
        return view('post');
    }
}
