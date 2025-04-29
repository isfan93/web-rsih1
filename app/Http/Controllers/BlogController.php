<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use App\Models\Post;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function all_post()
    {
        $post = Post::all();
        return view('blog', ['post' => $post]);
    }

    public function single_post()
    {
        // $post_s = Post::find($id);
        // return view('blog_single', ['post_s' => $post_s]);
        return view('blog_single');
        // return view('blog_single');
    }

    public function single_post1()
    {
        return view('blog_single');
        // return view('blog_single');
    }

    public function  media(){
        $media = Media::all();
        return view('mediakarir.media', compact('media'));
    }

    public function media_single($id)
    {
        $media_s = Media::find($id);
        return view('mediakarir.media_single', compact('media_s'));
    }

    public function karir(){
        $karir = Karir::all();
        return view('mediakarir.karir', compact('karir'));
    }
}
