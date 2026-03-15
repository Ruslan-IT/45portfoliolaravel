<?php

namespace App\Filament\Resources\BlogPages\Pages;

use App\Filament\Resources\BlogPages\BlogPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogPage extends CreateRecord
{
    protected static string $resource = BlogPageResource::class;
}
