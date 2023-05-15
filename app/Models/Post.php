<?php

namespace App\Models;


use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthUser;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'short_content',
        'content',
        'photo'
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function user()
    {
        return $this->belongsTo(User::class); //belongsto bu tegishli tegani
    }

    public function category()
    {
       return $this->belongsTo(Category::class);
    }

    public function tags()
    {
       return $this->belongsToMany(Tag::class);
    }
}
