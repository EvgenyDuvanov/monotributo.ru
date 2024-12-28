<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('status', 'published')->paginate(15);
        $contacts = Contacts::all();

        return view('reviews.index', compact('reviews', 'contacts'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(base_path('public_html/images/reviews'), $photoPath);
        }

        Review::create([
            'name' => $request->name,
            'review' => $request->review,
            'status' => 'unpublished',
            'photo' => $photoPath,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Спасибо! Ваш будет опубликован в ближайшее время!');
    }
}
