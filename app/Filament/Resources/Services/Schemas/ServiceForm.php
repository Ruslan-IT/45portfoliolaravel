<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),

                TextInput::make('sort')
                    ->required()
                    ->numeric()
                    ->default(0),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('seo_title'),
                        Textarea::make('seo_description')->rows(3),
                        TextInput::make('seo_keywords'),
                    ])
            ]);
    }
}
