<?php

namespace App\Filament\Resources\WorkPages;

use App\Filament\Resources\WorkPages\Pages\CreateWorkPage;
use App\Filament\Resources\WorkPages\Pages\EditWorkPage;
use App\Filament\Resources\WorkPages\Pages\ListWorkPages;
use App\Filament\Resources\WorkPages\Schemas\WorkPageForm;
use App\Filament\Resources\WorkPages\Tables\WorkPagesTable;
use App\Models\WorkPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WorkPageResource extends Resource
{
    protected static ?string $model = WorkPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|null|\UnitEnum $navigationGroup = 'Портфолио';


    public static function form(Schema $schema): Schema
    {
        return WorkPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WorkPagesTable::configure($table);
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
            'index' => ListWorkPages::route('/'),
            'create' => CreateWorkPage::route('/create'),
            'edit' => EditWorkPage::route('/{record}/edit'),
        ];
    }
}
