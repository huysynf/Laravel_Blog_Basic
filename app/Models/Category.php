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

}
