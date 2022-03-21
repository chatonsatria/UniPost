<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use PhpParser\Node\Stmt\If_;

//satu file controller bisa digunakan untuk banyak aksi jika database sudah terelasi

class PostController extends Controller
{
    public function allpost(){
            //take all post table,
            //dd(request(['category','search']));

            // untuk mengganti judul halaman sesuai dengan category atau author yang dituju
        $title='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        };
        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = ' By ' . $user->name;
        };
        return view('pages.Posts',[
            
            //title judul pada tab
            'title' => "All Post" . $title,
            'active' => 'posts',
            //fitur scope laravel untuk membuat pencarian yang kompleks
            //                         ambil filter dari Post                         pagination perhalaman / ambil query string agar tidak terreset pagination nya
            'posts' => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
            'categories' => Category::all()
        ]);
            //take all latest from post
            //sudah menggunakan eager (::with(['',''])) loading untuk memperkecil query database
            // 'posts' => Post::latest()->get(),
            // //take all categories table
    }
    //ambil semua Post sebagai $post
    public function singlepost(Post $post){
        return view('pages.post',[
            'title' => 'Author Post',
            'active' => 'posts',
            'post' => $post
        ]);
    } 
    //ambil semua Category sebagai $category
    public function postbycategory(Category $category){
        return view('/posts', [
            'title' => "Posts By Category : $category->name",
            'active' => 'posts',
            'posts' => $category->posts->load(['user','category']),
            'category' => Category::all()
        ]);
    }
    public function postbyauthor(User $user){
        return view('/posts', [
            "title" => "Post By Author : $user->name",
            'active' => 'posts',
            "posts" => $user->posts->load(['user','category']),
            "category" => Category::all()
        ]);
    }
    public function categories(){
        return view('pages.category', [
            'title' => "All Categories",
            'active' => 'category',
            'category' => Category::all()
        ]);
    }
}
