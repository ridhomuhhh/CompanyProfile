<?php

namespace App\Filament\Resources\FormulirPendaftarans;

use App\Filament\Resources\FormulirPendaftarans\Pages\CreateFormulirPendaftaran;
use App\Filament\Resources\FormulirPendaftarans\Pages\EditFormulirPendaftaran;
use App\Filament\Resources\FormulirPendaftarans\Pages\ListFormulirPendaftarans;
use App\Filament\Resources\FormulirPendaftarans\Schemas\FormulirPendaftaranForm;
use App\Filament\Resources\FormulirPendaftarans\Tables\FormulirPendaftaransTable;
use App\Models\FormulirPendaftaran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class FormulirPendaftaranResource extends Resource
{
    protected static ?string $model = FormulirPendaftaran::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $recordTitleAttribute = 'formulir';
    protected static ?string $navigationLabel = 'Formulir'; // Label di Menu Kiri
    protected static ?string $modelLabel = 'Formulir';      // Label di Judul Halaman
    protected static ?string $pluralModelLabel = 'Formulir'; // Label di Breadcrumb
    protected static string | UnitEnum | null $navigationGroup = 'Produk & Layanan';

    public static function form(Schema $schema): Schema
    {
        return FormulirPendaftaranForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FormulirPendaftaransTable::configure($table);
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
            'index' => ListFormulirPendaftarans::route('/'),
            'create' => CreateFormulirPendaftaran::route('/create'),
            'edit' => EditFormulirPendaftaran::route('/{record}/edit'),
        ];
    }
}