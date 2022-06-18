<?php

namespace App\Traits;

trait Voteable
{
    public function votes()
    {
        return $this->morphToMany(User::class, 'voteable', 'voteables');
    }

    public function isVoted()
    {
        return auth()->check() ? $this->votes()->where('user_id', auth()->user()->id)->exists() : false;
    }

    public function voteUp()
    {
        return auth()->check() ? $this->votes()->attach(auth()->user()->id) : false;
    }

    public function voteDown()
    {
        return auth()->check() ? $this->votes()->detach(auth()->user()->id) : false;
    }

    public function voteCount()
    {
        return $this->votes()->count();
    }

    public function getIsVotedAttribute(): bool
    {
        return auth()->check() ? $this->isVoted() : false;
    }

    public function getVoteCountAttribute()
    {
        return $this->voteCount();
    }

}
