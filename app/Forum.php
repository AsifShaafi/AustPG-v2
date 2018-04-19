<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{

    private $status = ['APPROVED', 'INAPPROPRIATE', 'PENDING'];

    public function author() {
        return $this->belongsTo(User::class, "author_id");
    }

    public function scopeApproved($query){
        return $query->where("status", $this->status[0]);
    }
}
