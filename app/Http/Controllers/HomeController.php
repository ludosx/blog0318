<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{

    public function __invoke(Request $request)
    {
        return view('home', ['posts' => Post::all()]);
    }
}
