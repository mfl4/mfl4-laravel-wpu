<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mhd. Farhan Lubis",
        "email" => "farhan@gmail.com",
        "image" => "farhan.jpg",
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Antologi Senandika",
            "slug" => "antologi-senandika",
            "author" => "Freya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsa magni repellat fuga autem nam doloremque delectus nemo dolor praesentium possimus, unde non, assumenda rem quam, inventore reiciendis ipsum laborum id placeat blanditiis neque saepe. Inventore aut obcaecati reprehenderit debitis corporis rem id quis, dolorum exercitationem vel accusantium ducimus corrupti atque voluptatibus cum sit voluptatem consequatur molestias. Laborum iure, labore, soluta libero dolor nulla, assumenda non magnam aliquid in at repudiandae? Ullam est quaerat inventore, dolore iste tenetur quasi possimus id neque deserunt, sit ratione saepe repellat quod praesentium nihil fugiat. Perferendis corrupti quos quisquam unde cumque voluptate iusto iste!."
        ],
        [
            "title" => "Lihatlah",
            "slug" => "lihatlah",
            "author" => "Nunung",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsa magni repellat fuga autem nam doloremque delectus nemo dolor praesentium possimus, unde non, assumenda rem quam, inventore reiciendis ipsum laborum id placeat blanditiis neque saepe. Inventore aut obcaecati reprehenderit debitis corporis rem id quis, dolorum exercitationem vel accusantium ducimus corrupti atque voluptatibus cum sit voluptatem consequatur molestias. Laborum iure, labore, soluta libero dolor nulla, assumenda non magnam aliquid in at repudiandae? Ullam est quaerat inventore, dolore iste tenetur quasi possimus id neque deserunt, sit ratione saepe repellat quod praesentium nihil fugiat. Perferendis corrupti quos quisquam unde cumque voluptate iusto iste!."
        ]
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Antologi Senandika",
            "slug" => "antologi-senandika",
            "author" => "Freya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsa magni repellat fuga autem nam doloremque delectus nemo dolor praesentium possimus, unde non, assumenda rem quam, inventore reiciendis ipsum laborum id placeat blanditiis neque saepe. Inventore aut obcaecati reprehenderit debitis corporis rem id quis, dolorum exercitationem vel accusantium ducimus corrupti atque voluptatibus cum sit voluptatem consequatur molestias. Laborum iure, labore, soluta libero dolor nulla, assumenda non magnam aliquid in at repudiandae? Ullam est quaerat inventore, dolore iste tenetur quasi possimus id neque deserunt, sit ratione saepe repellat quod praesentium nihil fugiat. Perferendis corrupti quos quisquam unde cumque voluptate iusto iste!."
        ],
        [
            "title" => "Lihatlah",
            "slug" => "lihatlah",
            "author" => "Nunung",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsa magni repellat fuga autem nam doloremque delectus nemo dolor praesentium possimus, unde non, assumenda rem quam, inventore reiciendis ipsum laborum id placeat blanditiis neque saepe. Inventore aut obcaecati reprehenderit debitis corporis rem id quis, dolorum exercitationem vel accusantium ducimus corrupti atque voluptatibus cum sit voluptatem consequatur molestias. Laborum iure, labore, soluta libero dolor nulla, assumenda non magnam aliquid in at repudiandae? Ullam est quaerat inventore, dolore iste tenetur quasi possimus id neque deserunt, sit ratione saepe repellat quod praesentium nihil fugiat. Perferendis corrupti quos quisquam unde cumque voluptate iusto iste!."
        ]
    ];

    $newPost = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $newPost = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $newPost
    ]);
});
