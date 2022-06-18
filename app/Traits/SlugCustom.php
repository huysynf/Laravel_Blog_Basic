<?php

namespace App\Traits;

use App\Models\Slug;

trait SlugCustom
{

    public function slug()
    {
        return $this->morphOne(Slug::class, 'slugable');
    }

    public function syncSlug($name)
    {
        return $this->slug()->updateOrcreate(['name' => str()->slug($name, '-')]);
    }

    protected static function booted()
    {
        static::created(function ($model) {
            $model->syncSlug($model->name);
        });

        static::updated(function ($model) {
            $model->syncSlug($model->name);
        });

        static::deleted(function ($model) {
            $model->deleteSlug();
        });
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
