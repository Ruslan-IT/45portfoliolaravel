<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = [
        'keyword',
        'region',
        'active'
    ];

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
