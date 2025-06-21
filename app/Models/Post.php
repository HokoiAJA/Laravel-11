<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Abdi Putra Zulkarnain",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Hooi Kian Hoo",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque."
    ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
