<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $_table = 'admins';

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
