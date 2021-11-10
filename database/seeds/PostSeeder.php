<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = config('posts');
        foreach ($posts as $post) {
            $new_post = new Post();
            $new_post->title = $post['title'];
            $new_post->content = $post['content'];
            $new_post->slug = $post['slug'];
            $new_post->thumbnail = $post['thumbnail'];
            $new_post->save();
        }
    }
}
