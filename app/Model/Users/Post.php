<?php

namespace App\Model\Users;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    protected $table = 'posts';

    protected $fillable = ['title', 'subtitle', 'slug', 'body', 'created_at', 'updated_at'];
}
