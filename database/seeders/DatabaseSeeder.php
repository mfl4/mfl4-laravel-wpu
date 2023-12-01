<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);\

        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'password' => bcrypt('password'),
        // ]);

        // User::create([
        //     'name' => 'Jack Doe',
        //     'email' => 'jack@example.com',
        //     'password' => bcrypt('password'),
        // ]);

        // User::create([
        //     'name' => 'Jane Doe',
        //     'email' => 'jane@example.com',
        //     'password' => bcrypt('password'),
        // ]);

        User::factory(10)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Dictum varius duis at consectetur. Enim ut tellus elementum sagittis vitae et leo duis. Purus in massa tempor nec. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Enim sed faucibus turpis in eu mi. Blandit aliquam etiam erat velit scelerisque.',
        //     'category_id' => 1,
        //     'user_id' => 3,
        // ]);

        // Post::create([
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Dictum varius duis at consectetur. Enim ut tellus elementum sagittis vitae et leo duis. Purus in massa tempor nec. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Enim sed faucibus turpis in eu mi. Blandit aliquam etiam erat velit scelerisque.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Dictum varius duis at consectetur. Enim ut tellus elementum sagittis vitae et leo duis. Purus in massa tempor nec. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Enim sed faucibus turpis in eu mi. Blandit aliquam etiam erat velit scelerisque.',
        //     'category_id' => 3,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Fourth Post',
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Dictum varius duis at consectetur. Enim ut tellus elementum sagittis vitae et leo duis. Purus in massa tempor nec. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Enim sed faucibus turpis in eu mi. Blandit aliquam etiam erat velit scelerisque.',
        //     'category_id' => 3,
        //     'user_id' => 3,
        // ]);

        // Post::create([
        //     'title' => 'Fifth Post',
        //     'slug' => 'fifth-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Dictum varius duis at consectetur. Enim ut tellus elementum sagittis vitae et leo duis. Purus in massa tempor nec. Venenatis cras sed felis eget velit aliquet sagittis id consectetur. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Enim sed faucibus turpis in eu mi. Blandit aliquam etiam erat velit scelerisque.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
    }
}
