<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('main_image')
                    ->label('Фото')
                    ->disk('public')
                    ->square(),
                TextColumn::make('name')
                    ->label('Название')
                    ->formatStateUsing(function ($state, $record) {
                        return str_repeat('— ', $record->parent_id ? 1 : 0) . $state;
                    })
                    ->searchable(),

                TextColumn::make('parent.name')
                    ->label('Родитель')
                    ->placeholder('—'),

                TextColumn::make('created_at')
                    ->dateTime('d.m.Y'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
