<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;

    protected $fillable = [
      'social_id',
      'social_name',
      'user_id',
        'auth_type'
    ];
}
