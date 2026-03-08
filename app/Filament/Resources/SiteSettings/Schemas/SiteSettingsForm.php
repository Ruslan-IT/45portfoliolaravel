<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SiteSettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('phone')
                    ->label('Телефон'),

                TextInput::make('email')
                    ->label('Email')
                    ->email(),

                TextInput::make('address')
                    ->label('address'),

                TextInput::make('extra_1')
                    ->label('extra_1'),

                TextInput::make('extra_2')
                    ->label('extra_2'),


                Builder::make('content_blocks')
                    ->label('Блоки контента')
                    ->blocks([
                        Block::make('text')
                            ->schema([
                                Textarea::make('text')
                                    ->label('Текст'),
                            ]),

                        Block::make('image')
                            ->schema([
                                FileUpload::make('image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('site'),
                            ]),
                    ]),
            ]);
    }
}
