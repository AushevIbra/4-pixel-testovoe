<?php

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Departament
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $logo
 *
 * @property-read User[] $users
 *
 * @author Ibra Aushev <aushevibra@yandex.ru>
 */
class Departament extends Model
{

    use SoftDeletes;

    const ATTR_ID          = 'id';
    const ATTR_NAME        = 'name';
    const ATTR_DESCRIPTION = 'description';
    const ATTR_LOGO        = 'logo';

    const WITH_USERS = 'users';

    protected $fillable = [
        self::ATTR_NAME,
        self::ATTR_DESCRIPTION,
        self::ATTR_LOGO
    ];

    /**
     * Все пользователи отдела
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     * @author Ibra Aushev <aushevibra@yandex.ru>
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_departaments', 'departament_id', 'user_id');
    }
}
