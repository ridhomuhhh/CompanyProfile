<?php

namespace App\Filament\Resources\MediaSosials\Pages;

use App\Filament\Resources\MediaSosials\MediaSosialResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMediaSosial extends CreateRecord
{
    protected static string $resource = MediaSosialResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
