<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $uploads = '/images/';

    protected $fillable=[
        'user_id',
        'title',
        'content',
        'photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPhotoAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
