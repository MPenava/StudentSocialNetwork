<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'photo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $uploads = '/images/';
    public function getPhotoAttribute($photo)
    {
        if($photo == ''){
            return "https://via.placeholder.com/150";
        }else{
            return $this->uploads . $photo;
        }
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function friendships()
    {
        return $this->hasMany(Friendship::class);
    }

    public function getFacultyAttribute()
    {
        $email = explode('@',$this->email);
        $email_domain = explode('.', $email[1]);
        $domain = Str::of($email_domain[0])->upper();
        
        return $domain;
    }



}
