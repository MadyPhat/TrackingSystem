<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'author',
        'title',
        'content',
        'created_at',
        'updated_at'
    ];
}
