<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionDestroy extends Controller
{

    public function __invoke(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}
