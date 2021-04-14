<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Article extends Model
{
    protected $table = 'articles';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    const HOT_ON = 1;
    const HOT_OFF = 0;

    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => 'badge-success',
        ],
        0 => [
            'name' => 'Private',
            'class' => 'badge-danger',
        ],
    ];
    public function getStatus()
    {
        return Arr::get($this->status, $this->a_active, '[N\A]');
    }

    
}
