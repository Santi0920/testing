<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'category_id',
        'slug',
        'image',
        'status'
    ];
}
