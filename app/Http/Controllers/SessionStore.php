<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionStore extends Controller
{

    public function __invoke(Request $request)
    {
        if(auth()->attempt(request(['email', 'password']))) {
            return "to do-> redirect(route('home'));";
        }
        else {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
        ]);    
        }
    }
}
