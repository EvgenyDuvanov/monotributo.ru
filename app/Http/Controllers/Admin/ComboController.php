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
}
