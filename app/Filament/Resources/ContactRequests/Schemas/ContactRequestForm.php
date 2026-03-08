<?php

namespace App\Filament\Resources\ContactRequests\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('subject')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('site'),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('ip_address'),
               /* TextInput::make('region'),*/
            ]);
    }
}
