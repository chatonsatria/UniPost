<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.Landing',[
            'title' => "Home",
            'active' => "home",
            'post' => Post::latest()->with('category', 'user')->take(10)->get(),
            'categories' => Category::all(),
        ]);

    }
}
