<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $guarded = ['*'];
    const STATUS_DONE = 1;
    const STATUS_DEFAULT = 0;
    protected $status = [
        1 => [
            'name' => 'Đã xử lý',
            'class' => 'badge-success',
        ],
        0 => [
            'name' => 'Chưa xử lý',
            'class' => 'badge-secondary',
        ],
    ];
    
    public function getStatus()
    {
        return Arr::get($this->status, $this->c_status, '[N\A]');
    }
}
