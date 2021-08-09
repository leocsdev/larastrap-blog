<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // one post belongs to one user
    function user() {
        return $this->belongsTo('App\Models\User');
    }
}
