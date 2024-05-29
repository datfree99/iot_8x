<?php

namespace App\Models\Sql;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * App\Models\Sql\UserAppModel
 *
 * @property int|null $userID
 * @property string|null $username
 * @property string|null $password
 * @property int|null $IDnhamay
 * @property int|null $role
 * @property-read \App\Models\Sql\FactoryModel|null $factory
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserAppModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAppModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAppModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAppModel whereIDnhamay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAppModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAppModel whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAppModel whereUserID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAppModel whereUsername($value)
 * @mixin \Eloquent
 */
class UserAppModel extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $connection = 'sqlsrv';
    protected $table = 'userappmobile';
    protected $guarded = ["userID"];
    protected $primaryKey = 'userID';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function factory()
    {
        return $this->belongsTo(FactoryModel::class, 'IDnhamay', 'ID');
    }
}
