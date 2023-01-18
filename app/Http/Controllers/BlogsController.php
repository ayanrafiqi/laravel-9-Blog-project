<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    function createBlog(Request $req)
    {
        $req->validate([
            'title' => 'required |max:50',
            'content' => 'required |min:80',
        ]);
        $blog = new Blog;
        $blog->title = $req->title;
        $blog->content = $req->content;
        $blog->userId = $req->session()->get('loginId');
        $blog->save();
        return redirect('blogs');
    }

    function getBlogs()
    {
        $data = Blog::join('users', 'blogs.userId', '=', 'users.userId')
            ->get(['blogs.title', 'blogs.content', 'users.name']);
        return view(
            "blogs",
            [
                'blogs' => $data
            ]
        );
    }

    function getMyBlogs(Request $req)
    {
        $user_id = $req->session()->get('loginId');
        $data = Blog::join('users', 'blogs.userId', '=', 'users.userId')
            ->where('blogs.userId', $user_id)
            ->get(['blogs.title', 'blogs.content', 'users.name','blogs.id']);
        return view(
            "myblogs",
            ['myblogs' => $data]

        );
    }

    function deleteBlog($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return redirect("myblogs");
    }
}
