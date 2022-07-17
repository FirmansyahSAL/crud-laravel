<?php

namespace App\Models;



class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Mia San Mia",
            "slug" => "Bayern-Munchen-FC",
            "author" => "FSLaksana",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam tempore sit reiciendis suscipit fuga non, cum culpa totam. Illo quisquam dolorem perferendis! Voluptatibus ex tempora aut accusantium odio placeat reprehenderit perferendis, illum veritatis labore magni consequuntur aperiam nisi voluptatum ad laudantium nam itaque nihil animi aliquam, sint excepturi sunt eveniet. Veniam pariatur vero vel? A reprehenderit quas ipsa inventore dolores libero id ad ut saepe, atque animi, delectus illum similique deserunt fuga quibusdam velit, pariatur voluptates culpa aut omnis eum?"

        ],
        [
            "title" => "You Never Walk Alone Alone",
            "slug" => "Liverpool-FC",
            "author" => "aksana",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam tempore sit reiciendis suscipit fuga non, cum culpa totam. Illo quisquam dolorem perferendis! Voluptatibus ex tempora aut accusantium odio placeat reprehenderit perferendis, illum veritatis labore magni consequuntur aperiam nisi voluptatum ad laudantium nam itaque nihil animi aliquam, sint excepturi sunt eveniet. Veniam pariatur vero vel? A reprehenderit quas ipsa inventore dolores libero id ad ut saepe, atque animi, delectus illum similique deserunt fuga quibusdam velit, pariatur voluptates culpa aut omnis eum?"

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
            if ($p["slug"] == $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
