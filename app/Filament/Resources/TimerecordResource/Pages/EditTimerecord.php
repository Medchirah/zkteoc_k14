<?php

namespace App\Filament\Resources\TimerecordResource\Pages;

use App\Filament\Resources\TimerecordResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTimerecord extends EditRecord
{
    protected static string $resource = TimerecordResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
