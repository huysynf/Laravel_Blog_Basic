<?php

namespace App\Models;

use App\Traits\SlugCustom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, SlugCustom;

    protected $fillable = [
        'name',
        'content',
        'user_id',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post');
    }

    public function assignCategories($categoryIds)
    {
        return $this->categories()->sync($categoryIds);
    }
}
