<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SigninValidator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(SigninValidator $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Incorrecte Login details');
        }
        return redirect()->route('dashboard');
    }
}
