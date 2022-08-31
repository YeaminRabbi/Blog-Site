<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    function blogCreate()
    {
        return view('backend.blog.create');
    }

    function store(Request $request)
    {
        // return $request;
        $blog =  new Blog();
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->save();

        return response()->json([
            'status' => 200,
            'message' => 'Blog saved Successfully!'
        ]);
        
    }
}
