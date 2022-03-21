<?php

namespace App\Models;

class Post
{
    //TIDAK DI PAKAI
    
    //PERCOBAAN MENGGUNAKAN DATA STATIC ARRAY ANALOGI DATABASE
    private static $blog_post = [
        [
            "title" => "Judul satu",
            "slug" => "judul-satu",
            "author" => "martin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, error! Aliquid aut sapiente voluptate iure, culpa doloremque. Deserunt sapiente fuga quis repellat rerum dolorum deleniti sit labore reprehenderit quas. Beatae."
        ],
        [
            "title" => "Judul dua",
            "slug" => "judul-dua",
            "author" => "chaton",
            "body" => "Test Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, error! Aliquid aut sapiente voluptate iure, culpa doloremque. Deserunt sapiente fuga quis repellat rerum dolorum deleniti sit labore reprehenderit quas. Beatae."
        ]
    ];

    public static function all()
    {
        // 1
        // //MEMANGGIL SEMUA DATA $blog_post SECARA STATIC "self::$variable" / IF PROPERTI BIASA "$this->$variable"
        // return self::$blog_post;

        //2
        // MENGGUNAKAN COLLECTION "collect()" UNTUK MENYIMPAN DATA ARRAY
        return collect(self::$blog_post);

    }

    //MENCARI NILAI SLUG MENGGUNAKAN PARAM $slug DARI DARI $blog_post TERHADAP $slug FUNCTION KE $slug ROUTE UNTUK DITAMPILKAN KE VIEW post.blade.php
    public static function find($slug)
    {
        // 1
        // //PANGGIL SEMUA DATA STATIC $blog_post
        // $posts = self::$blog_post;
        // //VARIABLE ARRAY BARU UNTUK LOOP PENCARIAN SLUG
        // $post = [];
        // //LOOP SEMUA DATA STATIC $posts SEBAGAI $post_sec (VARIABLE PEMBANTU) UNTUK MENCARI $post_sec "slug" SAMA DENGAN $slug UNTUK DI RETURN KE VIEW post.blade.php
        // foreach($posts as $post_sec)
        // {
        //     if($post_sec["slug"] === $slug){
        //         //VARIABLE $post MENYIMPAN ISI POST SESUAI SLUG YANG DI CARI
        //         $post = $post_sec;
        //     }
        // }
        // return $post;

        // 2
        // MEMANGGIL SEMUA DATA COLLECTION KEDALAM $post
        $post = static::all();
        // MENGEMBALIKAN NILAI $post MENGGUNAKAN FITUR COLLECTION "firstWHere("", $variable)
        return $post->firstWhere("slug", $slug);
    }
}
