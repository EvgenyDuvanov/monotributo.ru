<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function indexContacts()
    {
        return view('admin.contacts.index');
    }

    public function indexFaqs()
    {
        return view('admin.faqs.index');
    }

    public function indexGuides()
    {
        return view('admin.guides.index');
    }
}

