<?php

namespace App\Filament\Resources\Works\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class WorkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Main')
                    ->schema([

                        FileUpload::make('image')
                            ->label('Featured Image')
                            ->image()
                            ->disk('public')
                            ->directory('works')
                            ->imageEditor()
                            ->columnSpanFull(),

                        TextInput::make('title')
                            ->required(),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        Textarea::make('overview')
                            ->rows(5),

                    ]),

                Section::make('Project Details')
                    ->schema([

                        TextInput::make('category'),

                        TextInput::make('awards'),

                        TextInput::make('client'),

                        TextInput::make('year'),

                    ])
                    ->columns(4),

                Section::make('Objectives')
                    ->schema([

                        Repeater::make('objectives')
                            ->schema([

                                TextInput::make('title')
                                    ->label('Objective')
                                    ->required(),

                            ])
                            ->columns(1)

                    ]),

                Section::make('Gallery')
                    ->schema([

                        Repeater::make('gallery')
                            ->schema([

                                FileUpload::make('image')
                                    ->image()
                                    ->directory('works')
                                    ->disk('public'),

                                TextInput::make('tag'),

                                TextInput::make('title'),

                            ])
                            ->columns(3)

                    ]),

                Section::make('Client Testimonial')
                    ->schema([

                        Textarea::make('testimonial_text'),

                        TextInput::make('testimonial_author'),

                    ]),

                Section::make('SEO')
                    ->schema([

                        TextInput::make('seo_title'),

                        Textarea::make('seo_description'),

                        TextInput::make('seo_keywords'),

                    ])

            ]);
    }
}
