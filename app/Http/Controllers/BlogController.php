<?php

namespace App\Http\Controllers;

use App\Models\BlogPage;
use App\Models\BlogPost;
use App\Models\WorkPage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $posts = BlogPost::where('is_published', true)
            ->latest()
            ->paginate(6);
        $blogSeo = BlogPage::firstOrFail();

        return view('pages.blog', compact('posts', 'blogSeo'));
    }

    public function show($slug)
    {


        $post = BlogPost::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();


        $relatedPosts = BlogPost::where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->latest()
            ->limit(4)
            ->get();

        return view('pages.blog-single', compact('post', 'relatedPosts'));
    }
}
