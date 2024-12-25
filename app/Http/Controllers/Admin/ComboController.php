<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Combo;
use Illuminate\Http\Request;

class ComboController extends Controller
{
        public function index()
    {
        $combos = Combo::all();
        return view('admin.combos.index', compact('combos'));
    }

    public function edit($id)
    {
        $combo = Combo::findOrFail($id);
        return view('admin.combos.edit', compact('combo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'info' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $combo = Combo::findOrFail($id);
        $combo->update($request->only(['name', 'info', 'price']));

        return redirect()->route('admin.combos')->with('success', 'Пакет услуг успешно обновлён.');
    }

    public function destroy($id)
    {
        $combo = Combo::findOrFail($id);
        $combo->delete();

        return redirect()->route('admin.combos')->with('success', 'Пакет услуг успешно удалён.');
    }
}
