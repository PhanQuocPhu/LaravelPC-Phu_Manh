<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $guarded = ['*'];
    protected $fillable = ['name', 'password', 'email', 'provider', 'provider_id'];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

}

