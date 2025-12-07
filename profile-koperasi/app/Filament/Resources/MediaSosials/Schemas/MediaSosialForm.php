<?php

namespace App\Filament\Resources\MediaSosials\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MediaSosialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('link_instagram')
                    ->required()
                    ->label('Link Instagram'),
                TextInput::make('link_x')
                    ->required()
                    ->label('Link X (Twitter)'),
                TextInput::make('link_facebook')
                    ->required()
                    ->label('Link Facebook'),
                TextInput::make('link_tiktok')
                    ->required()
                    ->label('Link TikTok'),
                Toggle::make('is_active')
                    ->label('Tampilkan Media Sosial?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true),
            ]);
    }
}
