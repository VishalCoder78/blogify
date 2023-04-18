<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blogStatus;

class userBlog extends Model
{
    use HasFactory;
    function getStatus()
    {
        return $this->hasOne('blogStatus', 'blog_id');
    }
}
