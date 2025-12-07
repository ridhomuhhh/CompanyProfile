<?php

namespace App\Filament\Resources\StrukturOrganisasis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StrukturOrganisasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_anggota')
                    ->required()
                    ->label('Nama Anggota')
                    ->maxLength(100),
                TextInput::make('jabatan')
                    ->required()
                    ->label('Jabatan Anggota')
                    ->maxLength(100),
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull()
                    ->label('Deskripsi Singkat Anggota'),
                FileUpload::make('foto_anggota')
                    ->image()
                    ->disk('public'),
                Toggle::make('is_active')
                    ->label('Tampilkan Anggota?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true),
            ]);
    }
}
