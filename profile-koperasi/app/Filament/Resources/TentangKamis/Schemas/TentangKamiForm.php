<?php

namespace App\Filament\Resources\TentangKamis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class TentangKamiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('sejarah')
                    ->columnSpanFull()
                    ->label('Sejarah Singkat')
                    ->required(),
                Textarea::make('visi')
                    ->columnSpanFull()
                    ->label('Visi Perusahaan')
                    ->required(),
                Repeater::make('misi')
                    ->label('Daftar Misi')
                    ->simple(
                        TextInput::make('poin_misi')
                            ->required(),
                    )
                    ->addActionLabel('+ Tambah') // Label tombol tambah
                    ->reorderableWithButtons()
                    ->required(),
                Textarea::make('legalitas_hukum')
                    ->columnSpanFull()
                    ->required(),
                Toggle::make('is_active')
                    ->label('Tampilkan?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true),
            ]);
    }
}
