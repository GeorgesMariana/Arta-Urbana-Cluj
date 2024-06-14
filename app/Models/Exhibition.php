<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'location', 'image'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

