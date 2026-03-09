<?php

namespace App\Filament\Resources\Keywords\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Artisan;

class KeywordsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->headerActions([

                Action::make('checkPositions')
                    ->label('Проверить позиции')
                    ->action(function () {

                        Artisan::call('positions:check');

                    })
                    ->color('success')

            ])
            ->columns([
                TextColumn::make('keyword')
                    ->searchable(),

                TextColumn::make('region'),

                IconColumn::make('active')
                    ->boolean(),

                TextColumn::make('positions.position')
                    ->label('Last position')


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
