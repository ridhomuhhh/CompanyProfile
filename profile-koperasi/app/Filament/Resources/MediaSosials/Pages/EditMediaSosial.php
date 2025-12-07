<?php

namespace App\Filament\Resources\MediaSosials\Pages;

use App\Filament\Resources\MediaSosials\MediaSosialResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMediaSosial extends EditRecord
{
    protected static string $resource = MediaSosialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
