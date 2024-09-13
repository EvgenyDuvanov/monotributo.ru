<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Combo;
use App\Models\Contacts;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::take(6)->get();
        $contacts = Contacts::all();
        $reviews = Review::where('status', 'published')->inRandomOrder()->take(3)->get();
        $advantages = Advantage::all();
        $combos = Combo::all();

        return view('home.index', compact('services', 'contacts', 'reviews', 'advantages', 'combos'));
    }
}
