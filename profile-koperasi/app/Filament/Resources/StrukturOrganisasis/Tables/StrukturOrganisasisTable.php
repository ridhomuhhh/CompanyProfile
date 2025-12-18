<?php

namespace App\Filament\Resources\StrukturOrganisasis\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;

class StrukturOrganisasisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_anggota')
                    ->searchable(),
                TextColumn::make('jabatan')
                    ->searchable(),
                TextColumn::make('role')
                    ->searchable(),
                ImageColumn::make('foto')
                    ->disk('public')
                    ->label('Foto Anggota')
                    ->circular()
                    ->imageHeight('100px')
                    ->width('auto'),
                ToggleColumn::make('is_active')
                    ->label('Tampilkan Anggota')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                // BulkActionGroup::make([
                //     DeleteBulkAction::make(),
                // ]),
            ]);
    }
}
