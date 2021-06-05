<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $credentials = $request->only(['email', 'password']);
            if (Auth::attempt($credentials)) {
                return redirect('cms/user');
            }
            $message = 'Wrong username or password';
            return view('auth.login')->with('errors', $message);
        }
        return view('auth.login');
    }

    public function logout()
    {
        dd(Auth::user());
        Auth::logout();
        return redirect('login');
    }
}
