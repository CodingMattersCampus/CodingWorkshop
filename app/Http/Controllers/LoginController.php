<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->except('_token');

        if(Auth::attempt($data)) {
            return redirect()->route('home');
        }

        return redirect()->back();
    }
}
