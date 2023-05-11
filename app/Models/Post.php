<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
    'title',
    'short_content',
    'content',
    'photo'
    ];

    public function comments()
    {
        return $this->hasMany(Commnet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);//belongsto bu tegishli tegani
    }
}
