<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::paginate(10);
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'status' => 'required|in:published,unpublished',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(base_path('public_html/images/reviews'), $photoPath);
        }

        Review::create([
            'name' => $request->name,
            'review' => $request->review,
            'status' => $request->status,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.reviews')->with('success', 'Отзыв добавлен!');
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'status' => 'required|in:published,unpublished',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($review->photo && file_exists(base_path('public_html/images/reviews/' . $review->photo))) {
                unlink(base_path('public_html/images/reviews/' . $review->photo));
            }

            $photoPath = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(base_path('public_html/images/reviews'), $photoPath);
            $review->photo = $photoPath;
        }

        $review->update([
            'name' => $request->name,
            'review' => $request->review,
            'status' => $request->status,
            'photo' => $review->photo ?? $review->getOriginal('photo'),
        ]);

        return redirect()->route('admin.reviews')->with('success', 'Отзыв обновлен!');
    }

    public function destroy(Review $review)
    {
        if ($review->photo && file_exists(public_path('images/reviews/' . $review->photo))) {
            unlink(public_path('images/reviews/' . $review->photo));
        }

        $review->delete();

        return redirect()->route('admin.reviews')->with('success', 'Отзыв удалён!');
    }
}
