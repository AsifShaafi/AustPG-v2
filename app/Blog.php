<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
//    protected $primaryKey = "slug";
    //fillables
    protected $fillable = ['title', 'body', 'category_id', 'slug', 'author_id', 'status'];

    protected $types = ['PUBLISHED', 'DRAFT', 'PENDING'];

    // getting the user of this particular blog by foreign key system built in laravel
    public function user()
    {
        return $this->belongsTo(User::class, "author_id");
    }

//    getting only the published posts
    public function scopePublished($query)
    {
        return $query->where('status', $this->types[0]);
    }

    public function scopeDrafts($query)
    {
        return $query->where("status", $this->types[1]);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, "post_id")->where("post_type", "blog")
            ->where('comment_status', '1'); // returns a obj of typ comment
    }

    public function comment() {
        return $this->hasMany(Comment::class, "post_id");
    }

    public function addComment($comment_text, $user_id, $post_type)
    {

//        dd($comment_text, $user_id, $post_type);

        return $this->comment()->create([
            'post_type' => $post_type,
            'comment_text' => $comment_text,
            'user_id' => $user_id,
        ]);
//        return $this->comments()->create(compact('comment_text', 'user_id', "post_type"));
    }
}
