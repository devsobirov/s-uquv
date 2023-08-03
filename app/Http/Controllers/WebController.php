<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function homepage()
    {
        $banners = Banner::select(['id', 'intro', 'title', 'image', 'order'])->orderBy('order', 'asc')->get();

        return view('homepage', compact('banners'));
    }
}
