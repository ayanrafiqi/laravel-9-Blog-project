<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogsController extends Controller  
{
    function saveBlog(Request $req){
       
        $req->validate([
            'title'=>'required |max:20',
            'content'=>'required |min:30',
        ]);
        $blog=new Blog;
        $blog->title=$req->title;  
            $blog->body=$req->content;  
            $blog->save();
    }

    function retrieveBlogs(){
              $data=blog::all(); 
               return view("blogs",[
                'blogs'=>$data
               ]
               );
}
}

