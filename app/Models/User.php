<?php

namespace App\Models;

use App\Models\Users\UserSocial;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function socials(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserSocial::class);
    }

    /**
     * @param $socialId
     * @param $socialName
     * @param $authType
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addSocial($socialId, $socialName, string $authType = 'normal'): \Illuminate\Database\Eloquent\Model
    {
        return $this->socials()->updateOrCreate(
            [
                'social_id' => $socialId,
                'social_name' => $socialName,
                'auth_type' => $authType,
            ]
        );
    }

    public function scopeWithEmail($query, $email)
    {
        return $email ? $query->whereEmail($email) : null;
    }
}
