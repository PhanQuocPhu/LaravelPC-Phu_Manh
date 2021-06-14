<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class SlideBanner extends Model
{
    protected $table = 'slide_banners';

    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

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
        return Arr::get($this->status, $this->sb_status, '[N\A]');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'sb_link');
    }
}
