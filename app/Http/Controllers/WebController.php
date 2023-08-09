<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function homepage()
    {
        $banners = Banner::select(['id', 'intro', 'title', 'image', 'order'])->orderBy('order', 'asc')->get();
        $courses = Course::select(['id', 'title', 'image', 'created_at'])->orderBy('id', 'desc')->limit(8)->get();
        $posts = Post::select(['id', 'title', 'image', 'views','created_at'])->orderBy('id', 'desc')->limit(8)->get();

        return view('homepage', compact('banners', 'courses', 'posts'));
    }
}
