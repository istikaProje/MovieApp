<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WatchProgress extends Model
{
    protected $fillable = ['user_id', 'movie_id', 'progress'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
}
