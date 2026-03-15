<?php

namespace App\Filament\Resources\WorkPages\Pages;

use App\Filament\Resources\WorkPages\WorkPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWorkPage extends EditRecord
{
    protected static string $resource = WorkPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
