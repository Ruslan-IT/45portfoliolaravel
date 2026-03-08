<?php

namespace App\Filament\Resources\ContactRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('subject')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                /*TextColumn::make('site')
                    ->searchable(),*/
                TextColumn::make('ip_address')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Дата заявки')
                    ->since()
                    ->tooltip(fn ($record) => $record->created_at->format('d.m.Y H:i'))
                    ->sortable(),
               /*  TextColumn::make('region')
                    ->searchable(),*/


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
