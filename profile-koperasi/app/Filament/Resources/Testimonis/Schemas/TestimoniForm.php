<?php

namespace App\Filament\Resources\Testimonis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class TestimoniForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('pekerjaan')
                    ->label('Posisi/Jabatan')
                    ->required(),
                Textarea::make('isi')
                    ->required()
                    ->label('Testimoni')
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->image()
                    ->required()
                    ->disk('public'),
                Toggle::make('is_active')
                    ->label('Tampilkan Testimoni?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true),

            ]);
    }
}
