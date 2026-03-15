<?php

namespace App\Services;
use App\Models\BlogPage;
use App\Models\BlogPost;


class BlogService
{

    public function getBlogPageData()
    {
        $posts = BlogPost::where('is_published', true)
            ->latest()
            ->paginate(6);

        $blogSeo = BlogPage::firstOrFail();

        return[
            'posts' => $posts,
            'blogSeo' => $blogSeo
        ];
    }

    public function getPostData($slug)
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

        return[
            'post' => $post,
            'relatedPosts' => $relatedPosts
        ];

    }

}
