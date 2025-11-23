<?php

namespace App\Filament\Resources\FormulirPendaftarans\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FormulirPendaftaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_formulir'),
                Textarea::make('link_formulir')
                    ->columnSpanFull(),
                DateTimePicker::make('tanggal'),
                Select::make('user_id')
                    ->relationship('user', 'name'),
            ]);
    }
}
