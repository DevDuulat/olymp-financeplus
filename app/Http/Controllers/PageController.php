<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Firefly\FilamentBlog\Models\Post;

class PageController extends Controller
{
    public function index()
    {
        $faqs = Faq::take(5)->get();
        $posts = Post::take(3)->get();

        return view('pages.home', compact('faqs', 'posts'));
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
        $faqs = Faq::take(5)->get();
        return view('pages.faq', compact('faqs'));
    }

    public function news()
    {
        $posts = Post::paginate(10);
        return view('pages.news', compact('posts'));
    }

    public function partners()
    {
        return view('pages.partners');
    }
    public function PostShow($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts.show', compact('post'));
    }
}
