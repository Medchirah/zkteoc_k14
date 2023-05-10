<?php

namespace App\Filament\Resources\ShifttimeResource\Pages;

use App\Filament\Resources\ShifttimeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageShifttimes extends ManageRecords
{
    protected static string $resource = ShifttimeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
