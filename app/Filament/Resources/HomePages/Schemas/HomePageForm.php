<?php

namespace App\Filament\Resources\HomePages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Page Content')
                    ->schema([
                        TextInput::make('title')->label('Title'),

                        Textarea::make('description')
                            ->label('Description')
                            ->rows(4),

                        FileUpload::make('image')
                            ->label('Main Image')
                            ->image()
                            ->disk('public')
                            ->directory('home')
                            ->imagePreviewHeight('200'),
                    ]),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('seo_title')->label('SEO Title'),
                        Textarea::make('seo_description')->label('SEO Description')->rows(3),
                        TextInput::make('seo_keywords')->label('SEO Keywords'),
                    ]),


            ]);
    }
}
