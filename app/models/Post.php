<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = [
        'title'   => 'required|min:4|max:250',
        'content' => 'required'
    ];

    public function getSlugAttribute()
    {
        return Str::slug($this->attributes['title']);
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
