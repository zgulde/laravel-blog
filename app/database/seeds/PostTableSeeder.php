<?php

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();

        $post = new Post();
        $post->title = 'test seeder post';
        $post->image = '';
        $post->content = 'lorem';
        $post->user_id = $user->id;

        $post->save();
    }
}
