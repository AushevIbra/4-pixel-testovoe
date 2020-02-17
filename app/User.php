<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $email_verified_at
 *
 * @author Ibra Aushev <aushevibra@yandex.ru>
 */
class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    const ATTR_ID                = 'id';
    const ATTR_NAME              = 'name';
    const ATTR_EMAIL             = 'email';
    const ATTR_PASSWORD          = 'password';
    const ATTR_REMEMBER_TOKEN    = 'remember_token';
    const ATTR_EMAIL_VERIFIED_AT = 'email_verified_at';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
