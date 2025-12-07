<?php

namespace App\Filament\Resources\TentangKamis\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class TentangKamisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('visi')
                    ->searchable()
                    ->words(10, end: '...')
                    ->wrap(),
                TextColumn::make('sejarah')
                    ->searchable()
                    ->words(20, end: '...')
                    ->wrap(),
                TextColumn::make('legalitas_hukum')
                    ->searchable()
                    ->words(20, end: '...')
                    ->wrap(),
                ToggleColumn::make('is_active')
                    ->label('Tampilkan Tentang Kami')
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
            ])
            ->toolbarActions([
                // BulkActionGroup::make([
                //     DeleteBulkAction::make(),
                // ]),
            ]);
    }
}
