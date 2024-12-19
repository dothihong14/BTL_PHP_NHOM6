<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Tạo view auth/login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email',
            'user_pass' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->user_email, 'password' => $request->user_pass])) {
            return redirect()->intended('/'); // Chuyển hướng về trang chủ sau khi đăng nhập thành công
        }

        return back()->withErrors([
            'user_email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('auth.register'); // Tạo view auth/register.blade.php
    }

    public function register(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'user_pass' => 'required|string|min:6|confirmed',
        ]);
    
        // Tạo người dùng mới
        $user = User::create([
            'name' => $request->user_name . ' ' . $request->user_last_name,
            'email' => $request->email,
            'password' => Hash::make($request->user_pass),
        ]);
    
        // Đăng nhập người dùng
        Auth::login($user);
    
        // Chuyển hướng đến trang chính
        return redirect()->route('home')->with('success', 'Registration successful. You are now logged in.');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home'); // Chuyển hướng về trang chủ sau khi đăng xuất
    }
}
