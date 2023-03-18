<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostStore extends Controller
{

    public function __invoke(Request $request)
    {
         Post::create(request(['user_id', 'title', 'text_post']));

        return redirect(route('home'));
    }
}
