<?php

namespace App\Filament\Resources\Keywords\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class KeywordForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('keyword')
                    ->label('Поисковый запрос')
                    ->required(),

                TextInput::make('region')
                    ->default('213')
                    ->label('Регион Yandex'),

                Toggle::make('active')
                    ->default(true),
            ]);
    }
}
