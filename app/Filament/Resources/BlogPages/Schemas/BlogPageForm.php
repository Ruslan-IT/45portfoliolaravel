<?php

namespace App\Filament\Resources\BlogPages\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BlogPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               TextInput::make('h1')
                    ->required(),

                Textarea::make('text1'),

                Textarea::make('text2'),

                TextInput::make('seo_title'),

                Textarea::make('seo_description'),

                TextInput::make('seo_keywords'),

            ]);
    }
}
