<?php

namespace App\Filament\Resources\MediaSosials\Pages;

use App\Filament\Resources\MediaSosials\MediaSosialResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMediaSosials extends ListRecords
{
    protected static string $resource = MediaSosialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
