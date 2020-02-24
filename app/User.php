<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'otpstatus'
    ];

//

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = ['email_verified_at' => 'datetime'];

    protected $role = [
        "client" => 0,
        "support" => 1,
        "manager-support" => 2,
        "admin" => 3
    ];


    public function messages()
    {
        return $this->hasMany(Message::class);
    }

}
// Commit //// Commit //// Commit //
