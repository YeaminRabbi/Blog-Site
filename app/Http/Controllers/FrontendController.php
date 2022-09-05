<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function blogList()
    {
        return view('frontend.home.index');
    }

    public function blogView(Blog $blog)
    {
        return $blog;
    }
}
