<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'vote_average',
        'youtube_link',
        'image',
        'video',
        'category_id', // category_id alanını ekleyin
        'poster', // poster alanını ekleyin
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_movie');
    }
}