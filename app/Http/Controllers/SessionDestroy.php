<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionDestroy extends Controller
{

    public function __invoke(Request $request)
    {
        auth()->logout();

        return redirect(route('home'));
    }
}
