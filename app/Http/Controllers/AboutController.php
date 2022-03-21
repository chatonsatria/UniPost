<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about', [
            'title' => "About",
            'active' => 'about',
            'name' => "Chaton Satria Yudhystira",
            'email' => "martin1998.mcsy@gmail.com",
            'image' => "about.png"
        ]);
    }
}
