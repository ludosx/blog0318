<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class AnswerCreate extends Controller
{

    public function __invoke(Request $request)
    {
        return view('answer', ['post' => Post::find($request->post_id)]);
    }
}
