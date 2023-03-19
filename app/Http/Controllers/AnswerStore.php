<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Answer;

class AnswerStore extends Controller
{
    
    public function __invoke(Request $request)
    {
        Answer::create(request([
            'user_id',
            'post_id',
            'answer'
        ]));

        return redirect(route('home'));
    }
}
