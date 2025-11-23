<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul'),
                TextInput::make('media'),
                DateTimePicker::make('tanggal'),
                Select::make('user_id')
                    ->relationship('user', 'name'),
            ]);
    }
}
