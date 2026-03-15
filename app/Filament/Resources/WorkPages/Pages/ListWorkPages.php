<?php

namespace App\Filament\Resources\WorkPages\Pages;

use App\Filament\Resources\WorkPages\WorkPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWorkPages extends ListRecords
{
    protected static string $resource = WorkPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
