<?php

namespace App\Filament\Resources\Kontaks\Schemas;

use Filament\Schemas\Schema;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class KontakForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('alamat')
                    ->columnSpanFull()
                    ->label('Alamat Kantor')
                    ->required(),
                TextInput::make('telepon')
                    ->required()
                    ->tel(),
                TextInput::make('email')
                    ->required()
                    ->label('Email Perusahaan')
                    ->email(),
                TextInput::make('maps')
                    ->required()
                    ->label('Masukkan Google Maps Embed Link'),
                TextInput::make('jam_operasional')
                    ->required(),
                Toggle::make('is_active')
                    ->label('Tampilkan Kontak?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(false),
                // CreateAction::make()->successRedirectUrl(route('kontaks.list'))
            ]);
    }
}
