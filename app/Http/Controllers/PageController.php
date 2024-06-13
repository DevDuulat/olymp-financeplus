<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class PageController extends Controller
{
    public function index()
    {
        $faqs = Faq::take(5)->get();
        return view('pages.home', compact('faqs'));
    }
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function partners()
    {
        return view('pages.partners');
    }
}
