<?php

namespace App\Filament\Resources\BlogPages;

use App\Filament\Resources\BlogPages\Pages\CreateBlogPage;
use App\Filament\Resources\BlogPages\Pages\EditBlogPage;
use App\Filament\Resources\BlogPages\Pages\ListBlogPages;
use App\Filament\Resources\BlogPages\Schemas\BlogPageForm;
use App\Filament\Resources\BlogPages\Tables\BlogPagesTable;
use App\Models\BlogPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BlogPageResource extends Resource
{
    protected static ?string $model = BlogPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|null|\UnitEnum $navigationGroup = 'Блог';

    public static function form(Schema $schema): Schema
    {
        return BlogPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlogPages::route('/'),
            'create' => CreateBlogPage::route('/create'),
            'edit' => EditBlogPage::route('/{record}/edit'),
        ];
    }
}
