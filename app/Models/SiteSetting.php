<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'content_blocks',
        'address',
        'extra_1',
        'extra_2',
    ];

    protected $casts = [
        'content_blocks' => 'array',
    ];
}
