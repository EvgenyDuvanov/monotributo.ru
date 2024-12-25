<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::orderBy('created_at', 'desc')->paginate(15);
        $statuses = Application::getStatuses();
        
        return view('admin.applications.index', compact('applications', 'statuses'));
    }


    public function edit($id)
    {
        $application = Application::findOrFail($id);
        $statuses = Application::getStatuses(); // Получаем массив статусов
        return view('admin.applications.edit', compact('application', 'statuses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'status' => ['required', Rule::in(array_keys(Application::getStatuses()))],
            'comment' => 'nullable|string|max:1000',
        ]);

        $application = Application::findOrFail($id);
        $application->update($request->only(['name', 'email', 'phone', 'status', 'comment']));

        return redirect()->route('admin.applications')->with('success', 'Заявка успешно обновлена.');
    }

    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        $application->delete();

        return redirect()->route('admin.applications')->with('success', 'Заявка успешно удалена.');
    }
}
