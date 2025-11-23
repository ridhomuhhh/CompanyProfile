<?php

namespace App\Filament\Resources\TentangKamis\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TentangKamiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'id_admin'),
                Textarea::make('sejarah')
                    ->columnSpanFull(),
                Textarea::make('visi')
                    ->columnSpanFull(),
                Textarea::make('misi')
                    ->columnSpanFull(),
                Textarea::make('legalitas_hukum')
                    ->columnSpanFull(),
            ]);
    }
}
