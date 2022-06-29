<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function login(Request $request)
    {
        $title = "Login";
        return view('auth.login', compact('title'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function register(Request $request)
    {
        $title = "Registrasi akun";
        return view('auth.register', compact('title'));
    }

    public function createAccount(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'hp' => $request->hp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2,
        ]);
        return redirect()->route('home');
        
    }
}
