<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Main')
                    ->schema([

                        TextInput::make('title')
                            ->required(),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        TextInput::make('category'),

                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('blog'),

                        DatePicker::make('published_at'),

                        Toggle::make('is_published')
                            ->default(true),

                    ])->columns(2),



                Section::make('SEO')
                    ->schema([

                        TextInput::make('seo_title'),

                        Textarea::make('seo_description'),

                        TextInput::make('seo_keywords'),

                    ]),

                Select::make('city_id')
                    ->relationship('city','name')
                    ->searchable()
                    ->preload(),

                 Section::make('Content')
                     ->schema([

                         RichEditor::make('content')
                             ->extraAttributes([
                                 'style' => 'min-height: 500px;',
                             ]),


                         Textarea::make('excerpt')
                             ->rows(5),




                     ])
                     ->columns(1)
                     ->columnSpanFull()



            ]);
    }
}
