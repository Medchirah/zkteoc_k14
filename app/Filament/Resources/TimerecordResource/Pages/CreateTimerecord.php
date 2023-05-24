<?php

namespace App\Filament\Resources\TimerecordResource\Pages;

use App\Filament\Resources\TimerecordResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTimerecord extends CreateRecord
{
    protected static string $resource = TimerecordResource::class;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

}
