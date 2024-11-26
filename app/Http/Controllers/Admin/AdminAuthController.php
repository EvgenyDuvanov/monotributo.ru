<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    // Страница входа
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Обработка входа
        public function login(Request $request)
    {
        // Валидация входных данных
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'nullable|boolean', // Валидация флага "Запомнить меня"
        ]);

        // Попытка входа с учетом "запомнить меня"
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard'); // Перенаправление при успешном входе
        }

        // Обработка ошибки
        return back()->withErrors(['email' => 'Неверные данные для входа.']);
    }


    // Страница регистрации
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    // Обработка регистрации
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')->with('success', 'Регистрация успешна! Войдите в свою учетную запись.');
    }

    // Выход
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}


