<?php

namespace App\Filament\Resources\Sections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('title')
                    ->required(),

                TextInput::make('type'),




                TextInput::make('order')
                    ->numeric(),

                FileUpload::make('image')
                    ->disk('public')
                    ->directory('sections')
                    ->image()
                    ->nullable(),
                Textarea::make('description')
                    ->label('Описание')
                    ->nullable(),

                Repeater::make('meta')
                    ->label('Дополнительные поля')
                    ->schema([
                        TextInput::make('label')
                            ->label('Название')
                            ->required(),

                        TextInput::make('value')
                            ->label('Значение')
                            ->required(),
                    ])
                    ->columns(1)
                    ->addActionLabel('Добавить поле')
                    ->collapsible()
                    ->reorderable(),

                Toggle::make('is_active')



            ]);
    }
}
