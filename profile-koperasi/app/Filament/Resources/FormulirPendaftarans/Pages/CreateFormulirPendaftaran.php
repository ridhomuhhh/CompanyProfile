<?php

namespace App\Filament\Resources\FormulirPendaftarans\Pages;

use App\Filament\Resources\FormulirPendaftarans\FormulirPendaftaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFormulirPendaftaran extends CreateRecord
{
    protected static string $resource = FormulirPendaftaranResource::class;
    public function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
