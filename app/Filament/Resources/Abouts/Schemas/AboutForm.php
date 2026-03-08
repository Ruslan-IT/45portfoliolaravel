<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required()->label('Page Title'),
                Textarea::make('description')->label('About Me Text')->rows(5),

                Repeater::make('skills')
                    ->label('Design Skills')
                    ->schema([
                        TextInput::make('name')->label('Skill Name'),
                        FileUpload::make('logo')
                            ->label('Skill Logo')
                            ->disk('public')
                            ->image()
                            ->directory('skills')
                            ->imagePreviewHeight('100'),
                    ])
                    ->columns(2),

                Repeater::make('coding_skills')
                    ->label('Coding Skills')
                    ->schema([
                        TextInput::make('name')->label('Skill Name'),
                        TextInput::make('value')->label('Percentage'),
                    ])
                    ->columns(2),

                Repeater::make('experiences')
                    ->label('Experiences')
                    ->schema([
                        TextInput::make('period')->label('Years'),
                        TextInput::make('position')->label('Position'),
                        TextInput::make('company')->label('Company'),
                    ])
                    ->columns(3),

                Repeater::make('education')
                    ->label('Education')
                    ->schema([
                        TextInput::make('year')->label('Year'),
                        TextInput::make('degree')->label('Degree'),
                        TextInput::make('school')->label('School'),
                    ])
                    ->columns(3),

                Repeater::make('testimonials')
                    ->label('Testimonials')
                    ->schema([
                        TextInput::make('author')->label('Name'),
                        TextInput::make('position')->label('Position'),


                        FileUpload::make('image')
                            ->label('Image')
                            ->disk('public')
                            ->image()
                            ->directory('testimonials')
                            ->imagePreviewHeight('100'),

                        Textarea::make('text')->label('Testimonial'),
                    ])
                    ->columns(2),

                TextInput::make('hours_of_works')->numeric(),
                TextInput::make('projects_done')->numeric(),
                TextInput::make('satisfied_customers')->numeric(),
                TextInput::make('awards_winning')->numeric(),

                TextInput::make('seo_title')->label('SEO Title'),
                Textarea::make('seo_description')->label('SEO Description'),
                TextInput::make('seo_keywords')->label('SEO Keywords'),

            ]);
    }
}
