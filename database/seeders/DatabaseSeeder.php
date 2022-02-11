<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum quidem recusandae eveniet, quos quasi quo obcaecati labore! Ex laboriosam at quasi consectetur maiores dolores esse quibusdam deserunt asperiores facilis. Molestias.'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum quidem recusandae eveniet, quos quasi quo obcaecati labore! Ex laboriosam at quasi consectetur maiores dolores esse quibusdam deserunt asperiores facilis. Molestias.'
        ]);
    }
}
