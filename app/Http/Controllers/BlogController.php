<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function all_post()
    {
        $post = Post::all();
        return view('blog', ['post' => $post]);
    }

    public function single_post($id)
    {
        $post_s = Post::find($id);
        return view('blog_single', ['post_s' => $post_s]);
        // return view('blog_single');
    }

    public function single_post1()
    {
        return view('blog_single');
        // return view('blog_single');
    }
}
