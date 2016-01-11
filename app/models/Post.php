<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    public static $rules = [
        'title'   => 'required|min:4|max:250',
        'content' => 'required'
    ];
}
