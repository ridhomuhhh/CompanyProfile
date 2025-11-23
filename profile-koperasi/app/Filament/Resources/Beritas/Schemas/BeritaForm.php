<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul_berita')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('isi_berita')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('gambar'),
                DateTimePicker::make('tanggal'),
                Select::make('user_id')
                    ->relationship('user', 'id_admin'),
            ]);
    }
}
