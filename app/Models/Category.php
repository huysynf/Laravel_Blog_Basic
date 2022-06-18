<?php

namespace App\Models;

use App\Traits\Slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Slug;

    protected $fillable = [
      'name',
      'parent_id'
    ];
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function getParentNameAttribute()
    {
        return optional($this->parent)->name;
    }

    public function scopeWithoutChild($q)
    {
        return $q->whereNull('parent_id');
    }
}
