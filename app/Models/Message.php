<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'source_id',
        'target_id',
        'content',
        'is_visible'
    ];

    public function sourceUser()
    {
        return $this->belongsTo(User::class, 'source_id');
    }
    public function targetUser()
    {
        return $this->belongsTo(User::class, 'target_id');
    }
    
}
