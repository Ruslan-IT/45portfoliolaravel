<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Название')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) =>
                    $set('slug', Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated(),

                Select::make('category_id')
                    ->label('Категория')
                    ->options(
                        Category::pluck('name', 'id')
                    )
                    ->searchable()
                    ->required(),


                Textarea::make('description')
                    ->label('Описание')
                    ->rows(5),

                Textarea::make('desc1')
                    ->label('Описание-1')
                    ->rows(5),

                Textarea::make('desc2')
                    ->label('Описание-2')
                    ->rows(5),

                Textarea::make('desc3')
                    ->label('Описание-3')
                    ->rows(5),


                FileUpload::make('main_image')
                    ->label('Основное фото')
                    ->image()
                    ->directory('products/main')
                    ->disk('public')  // <--- добавляем public диск
                    ->imageEditor(),

                FileUpload::make('gallery')
                    ->label('Галерея')
                    ->multiple()
                    ->image()
                    ->directory('products/gallery')
                    ->disk('public') // <--- добавляем public диск
                    ->reorderable(),
            ]);


    }
}
