<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Utilities\Set as UtilitiesSet;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul_berita')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (UtilitiesSet $set, ?string $state) {
                        if ($state) {
                            $set('slug', Str::slug($state));
                        }
                    }),
                TextInput::make('slug')
                    ->required()
                    ->unique(table: 'berita', ignorable: fn ($record) => $record)
                    ->readonly(),
                Textarea::make('isi_berita')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->image()
                    ->required()
                    ->disk('public'),
                DateTimePicker::make('tanggal')
                    ->required(),
                Toggle::make('is_active')
                    ->label('Terbitkan Berita?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(false),
            ]);
    }
}
