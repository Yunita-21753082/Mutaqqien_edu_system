<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // CEK ROLE SECARA TEGAS
            switch ($user->role_id) {
                case '1':
                    return redirect('/admin/dashboard');
                case '2':
                    return redirect('/operator/dashboard');
                default:
                    Auth::logout();
                    return redirect('/login')->withErrors([
                        'username' => 'Role tidak dikenali.',
                    ]);
            }
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
