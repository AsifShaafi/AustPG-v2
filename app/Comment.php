<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment_text', 'user_id', 'blog_id',];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
