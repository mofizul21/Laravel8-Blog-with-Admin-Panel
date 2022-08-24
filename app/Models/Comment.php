<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
        // This post belongs to this comment with the post_id
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
        // This user belongs to this comment with the user_id
    }
}
