<?php

namespace App\Filament\Resources\Kontaks\Pages;

use App\Filament\Resources\Kontaks\KontakResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\Kontak;

class ListKontaks extends ListRecords
{
    protected static string $resource = KontakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                // Tambahkan logika ini:
                // Tombol akan hidden (sembunyi) jika jumlah data > 0
                ->hidden(fn (): bool => Kontak::count() >= 1),
        ];
    }
}