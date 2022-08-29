<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $fillable = ['title', 'parent_id'];

    public function childs()
    {

        return $this->hasMany('App\Models\Book', 'parent_id', 'id');
    }
}
