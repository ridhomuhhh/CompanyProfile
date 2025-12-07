<?php

namespace App\Filament\Resources\FormulirPendaftarans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class FormulirPendaftaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_formulir'),
                Textarea::make('link_formulir')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label('Tampilkan Formulir?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(false),
                DateTimePicker::make('tanggal')
            ]);
    }
}
