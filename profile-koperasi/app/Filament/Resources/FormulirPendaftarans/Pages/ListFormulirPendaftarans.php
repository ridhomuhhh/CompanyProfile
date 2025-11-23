<?php

namespace App\Filament\Resources\FormulirPendaftarans\Pages;

use App\Filament\Resources\FormulirPendaftarans\FormulirPendaftaranResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFormulirPendaftarans extends ListRecords
{
    protected static string $resource = FormulirPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
