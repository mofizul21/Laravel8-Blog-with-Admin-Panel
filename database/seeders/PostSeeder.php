<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <= 3 ; $i++) { 
            $post = new Post();
            $post->category_id = $faker->randomDigit;
            $post->name = $faker->sentence;
            $post->slug = Str::slug($post->name);
            $post->description = $faker->paragraph;
            $post->yt_iframe = '<iframe width="560" height="315" src="https://www.youtube.com/embed/Y8crm7oULds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            $post->meta_title = $faker->sentence;
            $post->meta_description = $faker->paragraph;
            $post->meta_keyword = $faker->name;
            $post->status = $faker->numberBetween(0, 1);
            $post->created_by = $faker->numberBetween(1, 3);

            $post->save();
        }
    }
}
