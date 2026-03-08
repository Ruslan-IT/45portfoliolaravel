<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionItem extends Model
{
    protected $fillable = [
        'section_id',
        'title',
        'description',
        'image',
        'order',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

}
