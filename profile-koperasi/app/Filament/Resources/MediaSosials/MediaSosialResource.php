<?php

namespace App\Filament\Resources\MediaSosials;

use App\Filament\Resources\MediaSosials\Pages\CreateMediaSosial;
use App\Filament\Resources\MediaSosials\Pages\EditMediaSosial;
use App\Filament\Resources\MediaSosials\Pages\ListMediaSosials;
use App\Filament\Resources\MediaSosials\Schemas\MediaSosialForm;
use App\Filament\Resources\MediaSosials\Tables\MediaSosialsTable;
use App\Models\MediaSosial;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MediaSosialResource extends Resource
{
    protected static ?string $model = MediaSosial::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-share';

    protected static ?string $recordTitleAttribute = 'mediasosial';
    protected static ?string $navigationLabel = 'Media Sosial'; // Label di Menu Kiri
    protected static ?string $modelLabel = 'Media Sosial';      // Label di Judul Halaman
    protected static ?string $pluralModelLabel = 'Media Sosial'; // Label di Breadcrumb

    protected static string | UnitEnum | null $navigationGroup = 'Lainnya';

    public static function form(Schema $schema): Schema
    {
        return MediaSosialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MediaSosialsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMediaSosials::route('/'),
            'create' => CreateMediaSosial::route('/create'),
            'edit' => EditMediaSosial::route('/{record}/edit'),
        ];
    }
}