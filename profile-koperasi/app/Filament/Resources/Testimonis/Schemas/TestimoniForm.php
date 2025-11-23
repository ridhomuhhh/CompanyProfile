<?php

namespace App\Filament\Resources\Testimonis\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TestimoniForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama'),
                TextInput::make('pekerjaan'),
                Textarea::make('isi')
                    ->columnSpanFull(),
                TextInput::make('foto'),
                Select::make('user_id')
                    ->relationship('user', 'name'),
            ]);
    }
}
