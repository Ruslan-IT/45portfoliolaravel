<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'desc1',
        'desc2',
        'desc3',
        'category_id',
        'main_image',
        'gallery',
    ];

    protected $casts = [
        'gallery' => 'array',
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            $product->slug = Str::slug($product->title);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
