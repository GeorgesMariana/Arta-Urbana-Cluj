<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'published_date', 'image'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
