<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'description',
        'type',
        'image',
        'meta',
        'is_active',
        'order',
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function items()
    {
        return $this->hasMany(SectionItem::class)->orderBy('order');
    }
}
