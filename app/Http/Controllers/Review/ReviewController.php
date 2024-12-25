<?php

namespace App\Http\Controllers\Review;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('status', 'published')->paginate(15);
        $contacts = Contacts::all();

        return view('reviews.index', compact('reviews', 'contacts'));
    }
}
