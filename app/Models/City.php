<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active'
    ];

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function blogposts()
    {
        return $this->hasMany(BlogPost::class);
    }
}
