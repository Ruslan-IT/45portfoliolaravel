<?php

namespace App\Filament\Resources\BlogPages\Pages;

use App\Filament\Resources\BlogPages\BlogPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBlogPages extends ListRecords
{
    protected static string $resource = BlogPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
