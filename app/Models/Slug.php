<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    protected $table = 'slugs';

    protected $fillable = ['slugable_id', 'slugable_type', 'name'];

    public function slugable()
    {
        return $this->morphTo();
    }
}
