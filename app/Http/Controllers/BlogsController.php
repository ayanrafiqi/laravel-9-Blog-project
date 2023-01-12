<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    function saveBlog(Request $req)
    {
        $req->validate([
            'title' => 'required |max:20',
            'content' => 'required |min:30',
        ]);
        $blog = new Blog;
        $blog->title = $req->title;
        $blog->content = $req->content;
        $blog->save();
        return redirect('blogs');
    }

    function getBlogs()
    {
        $data = Blog::all();
        return view(
            "blogs",
            [
                'blogs' => $data
            ]
        );
    }
}
