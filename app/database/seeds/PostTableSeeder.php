<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $post = new Post();
        $post->title = 'test seeder post';
        $post->image = '';
        $post->content = 'lorem';
        $post->user_id = 1;

        $post->save();
    }
}
