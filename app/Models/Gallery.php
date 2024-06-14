<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
