<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', "student_id", "phone",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // region making relationship with blog
    // getting only the published blogs, for showing to others
    public function blog()
    {
        return $this->hasMany(Blog::class, "author_id")->where("status", "PUBLISHED");
    }

    public function recentBlog() {
        return $this->blog()->limit(5);
    }

    // getting all the blogs, including drafts, for user himself
    public function allBlog()
    {
        return $this->hasMany(Blog::class, "author_id");
    }
    public function allRecentBlog()
    {
        return $this->allBlog()->limit(4);
    }

    //endregion
    // getting user details
    public function scopeUser($query, $user)
    {
        return $query->where('name', $user)->get();
    }
}
