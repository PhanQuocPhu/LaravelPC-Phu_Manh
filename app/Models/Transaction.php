<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = ['*'];
    /* protected $fillable = ['tr_user_id', 'tr_total', 'tr_note', 'tr_address', 'tr_phone', 'tr_status', 'created_at', 'updated_at']; */

    const STATUS_DEFAULT = 0;
    const STATUS_DONE = 1;
    const STATUS_SHIPPING = 2;
    
    protected $status = [
        0 => [
            'name' => 'Đang chờ',
            'class' => 'badge-secondary dropdown-toggle',
            'toggle' => 'dropdown'
        ],
        1 => [
            'name' => 'Đã xử lý',
            'class' => 'badge-success',
            'toggle' => ''
        ],
        2 => [
            'name' => 'Đang giao hàng',
            'class' => 'badge-warning dropdown-toggle',
            'toggle' => 'dropdown'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->status, $this->tr_status, '[N\A]');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'tr_user_id');

    }
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'id', 'p_transaction_id');
    }
}
