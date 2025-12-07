<?php

namespace App\Filament\Resources\Kontaks\Tables;

use App\Models\Kontak;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Toggle;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Enums\RecordActionsPosition;

class KontaksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('telepon')
                    ->label('No Telepon')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('alamat')
                    ->searchable()
                    ->wrap()
                    ->color('primary')
                    ->weight('bold')
                    ->url(fn (Kontak $record): string => $record->maps ?? '#')
                    ->openUrlInNewTab(),
                TextColumn::make('jam_operasional')
                    ->searchable(),
                ToggleColumn::make('is_active')
                    ->label('Tampilkan Kontak')
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
                EditAction::make()
            ],  position: RecordActionsPosition::BeforeCells)
            ->toolbarActions([
                // BulkActionGroup::make([
                //     DeleteBulkAction::make(),
                // ]),
            ]);
    }
}
