<?php

namespace App\Models;

class Post
{
    private static $blogPosts = [
        [
            "title" => "Antologi Senandika",
            "slug" => "antologi-senandika",
            "author" => "Freya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsa magni repellat fuga autem nam doloremque delectus nemo dolor praesentium possimus, unde non, assumenda rem quam, inventore reiciendis ipsum laborum id placeat blanditiis neque saepe. Inventore aut obcaecati reprehenderit debitis corporis rem id quis, dolorum exercitationem vel accusantium ducimus corrupti atque voluptatibus cum sit voluptatem consequatur molestias. Laborum iure, labore, soluta libero dolor nulla, assumenda non magnam aliquid in at repudiandae? Ullam est quaerat inventore, dolore iste tenetur quasi possimus id neque deserunt, sit ratione saepe repellat quod praesentium nihil fugiat. Perferendis corrupti quos quisquam unde cumque voluptate iusto iste!.",
        ],
        [
            "title" => "Lihatlah",
            "slug" => "lihatlah",
            "author" => "Nunung",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsa magni repellat fuga autem nam doloremque delectus nemo dolor praesentium possimus, unde non, assumenda rem quam, inventore reiciendis ipsum laborum id placeat blanditiis neque saepe. Inventore aut obcaecati reprehenderit debitis corporis rem id quis, dolorum exercitationem vel accusantium ducimus corrupti atque voluptatibus cum sit voluptatem consequatur molestias. Laborum iure, labore, soluta libero dolor nulla, assumenda non magnam aliquid in at repudiandae? Ullam est quaerat inventore, dolore iste tenetur quasi possimus id neque deserunt, sit ratione saepe repellat quod praesentium nihil fugiat. Perferendis corrupti quos quisquam unde cumque voluptate iusto iste!.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
