<?php

namespace App\Http\Controllers;

use App\Services\BlogService;

class BlogController extends Controller
{

    private BlogService  $service;

    public function __construct(BlogService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('pages.blog', $this->service->getBlogPageData());
    }

    public function show($slug)
    {

        return view('pages.blog-single', $this->service->getPostData($slug));
    }
}
