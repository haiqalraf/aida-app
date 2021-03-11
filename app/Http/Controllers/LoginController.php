<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        if (auth()->attempt($request->only('username', 'password'))) {
            return redirect()->route('search.main');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
