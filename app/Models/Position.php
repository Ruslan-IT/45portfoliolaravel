<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'keyword_id',
        'position',
        'checked_at'
    ];

    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }
}
