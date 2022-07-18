<?php

namespace App\Models\Users;

use App\Enums\Social;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_id',
        'social_name',
        'user_id',
        'auth_type',
    ];

    public $casts = [
        'social' => Social::class,
    ];
}
