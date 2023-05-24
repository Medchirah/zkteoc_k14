<?php

namespace App\Filament\Resources\TabletimeResource\Pages;

use App\Filament\Resources\TabletimeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTabletime extends CreateRecord
{
    protected static string $resource = TabletimeResource::class;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
