<?php

namespace App\Filament\Resources\TabletimeResource\Pages;

use App\Filament\Resources\TabletimeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTabletimes extends ManageRecords
{
    protected static string $resource = TabletimeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
