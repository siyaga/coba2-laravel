<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Lifeforme",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, incidunt fuga amet autem et dolorem quis possimus, pariatur consequatur aut praesentium itaque libero doloribus perspiciatis impedit odit nisi vero dolorum! Molestiae, cupiditate tempore quas nesciunt officiis ea. Ab ipsum doloribus perferendis labore incidunt."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Sandika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, incidunt fuga amet autem et dolorem quis possimus, pariatur consequatur aut praesentium itaque libero doloribus perspiciatis impedit odit nisi vero dolorum! Molestiae, cupiditate tempore quas nesciunt officiis ea. Ab ipsum doloribus perferendis labore incidunt. Officiis unde ab magni neque sint nostrum dignissimos atque optio quis a commodi, ratione tenetur numquam similique placeat eligendi ut et illo itaque fugiat quasi asperiores labore aliquid! Perspiciatis repellat, nisi doloribus praesentium officiis sit atque quo?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
