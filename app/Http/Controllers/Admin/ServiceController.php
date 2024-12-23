<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'info' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $data = $request->only(['name', 'info', 'price']);
        $data['image'] = 1;

        Service::create($data);

        return redirect()->route('admin.services')->with('success', 'Новая услуга успешно создана.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'info' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->only(['name', 'info', 'price']));

        return redirect()->route('admin.services')->with('success', 'Услуга успешно обновлена.');
    }

    public function destroy($id)
    {
        // Поиск услуги по ID
        $service = Service::findOrFail($id);

        // Удаление услуги
        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Услуга успешно удалена.');
    }
}

