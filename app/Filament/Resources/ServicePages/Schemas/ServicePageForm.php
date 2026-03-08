<?php

namespace App\Filament\Resources\ServicePages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServicePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Content')
                    ->schema([
                        TextInput::make('title'),

                        Textarea::make('description')
                            ->rows(4),
                    ]),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('seo_title')
                            ->label('SEO Title'),

                        Textarea::make('seo_description')
                            ->label('SEO Description')
                            ->rows(3),

                        TextInput::make('seo_keywords')
                            ->label('SEO Keywords'),
                    ]),
            ]);
    }
}
