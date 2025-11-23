<?php

namespace App\Filament\Resources\MediaSosials\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MediaSosialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('link_instagram'),
                TextInput::make('link_x'),
                TextInput::make('link_facebook'),
                TextInput::make('link_tiktok'),
                Select::make('user_id')
                    ->relationship('user', 'name'),
            ]);
    }
}
