<?php

namespace App\Filament\Resources\FormulirPendaftarans\Pages;

use App\Filament\Resources\FormulirPendaftarans\FormulirPendaftaranResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFormulirPendaftaran extends EditRecord
{
    protected static string $resource = FormulirPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
