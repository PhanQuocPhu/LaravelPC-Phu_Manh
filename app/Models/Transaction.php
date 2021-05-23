<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = ['*'];

    const STATUS_DEFAULT = 0;
    const STATUS_DONE = 1;
    const STATUS_PAY = 2;
    const STATUS_ONGOING = 3;
    
    
    public function user()
    {
        return $this->belongsTo(User::class, 'tr_user_id');

    }
}
