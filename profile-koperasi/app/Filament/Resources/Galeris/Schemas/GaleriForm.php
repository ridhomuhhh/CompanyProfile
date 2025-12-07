<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul') //bisa diganti deskripsi gambar?
                    ->required(),
                DateTimePicker::make('tanggal'),
                FileUpload::make('media')
                    ->label('Gambar')
                    ->image()
                    ->required()
                    ->disk('public'),
                Toggle::make('is_active')
                    ->label('Tampilkan Gambar'),
            ]);
    }
}
