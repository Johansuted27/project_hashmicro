<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function createUser($username, $password)
    {
        return self::create([
            'username' => $username,
            'password' => bcrypt($password),
        ]);
    }

    public static function updateUser($id, $username, $password)
    {
        $user = self::find($id);
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->save();
        return $user;
    }

    public static function deleteUser($id)
    {
        return self::destroy($id);
    }
}
