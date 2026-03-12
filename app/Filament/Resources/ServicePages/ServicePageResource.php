<?php

namespace App\Filament\Resources\ServicePages;

use App\Filament\Resources\ServicePages\Pages\CreateServicePage;
use App\Filament\Resources\ServicePages\Pages\EditServicePage;
use App\Filament\Resources\ServicePages\Pages\ListServicePages;
use App\Filament\Resources\ServicePages\Schemas\ServicePageForm;
use App\Filament\Resources\ServicePages\Tables\ServicePagesTable;
use App\Models\ServicePage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServicePageResource extends Resource
{
    protected static ?string $model = ServicePage::class;

    protected static string|null|\UnitEnum $navigationGroup = 'Услуги';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cog6Tooth;


    public static function form(Schema $schema): Schema
    {
        return ServicePageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicePagesTable::configure($table);
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
            'index' => ListServicePages::route('/'),
            'create' => CreateServicePage::route('/create'),
            'edit' => EditServicePage::route('/{record}/edit'),
        ];
    }
}
