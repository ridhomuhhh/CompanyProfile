<?php

namespace App\Filament\Resources\StrukturOrganisasis\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StrukturOrganisasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('deskripsi'),
                TextInput::make('nama_anggota'),
                TextInput::make('jabatan'),
                TextInput::make('foto'),
                Select::make('user_id')
                    ->relationship('user', 'name'),
            ]);
    }
}
