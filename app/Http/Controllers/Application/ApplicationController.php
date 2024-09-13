<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Notifications\NewApplicationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ApplicationController extends Controller
{
    // public function create()
    // {
    //     return view('applications.create');
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:40',
            'phone' => 'required|string|max:25',
            'comment' => 'nullable|string|max:500',
        ]);

        $application = Application::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'status' => Application::STATUS_NEW, // Установка статуса "Новый" по умолчанию
            'comment' => $request->input('comment', null),
        ]);

        Notification::route('mail', 'monotributo.ru@gmail.com') // Email администратора
                    ->notify(new NewApplicationNotification($application));
        
        return redirect()->back()->with('success', 'Ваша заявка успешно отправлена, скоро мы свяжемся с вами!');
    }
}
