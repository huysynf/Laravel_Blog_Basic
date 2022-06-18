<?php

namespace App\Traits;

use Cviebrock\EloquentSluggable\Sluggable;

trait Slug
{
    use Sluggable;

    public function sluggable(): array
    {
        return [];
    }

    public function slug()
    {
        return $this->morphOne(Slug::class, 'model_has_slug', 'model_type', 'model_id', 'id');
    }

    public function syncSlug($name, $columName = 'name')
    {
        return $this->slug()->updateOrcreate([$columName => str()->slug($name, '-')]);
    }

    public function scopeWithSlugName($query, $slugName)
    {
        return $slugName ? $query->whereHas('slug', fn($q) => $q->whereName($slugName) ): null;
    }

    public function deleteSlug()
    {
        return $this->slug()->delete();
    }

    public function getSlugNameAttribute()
    {
        return optional($this->slug)->name;
    }
}
