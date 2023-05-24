<?php

namespace App\Filament\Resources\NewtableResource\Pages;

use App\Filament\Resources\NewtableResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewtable extends EditRecord
{
    protected static string $resource = NewtableResource::class;

    protected function getActions(): array
    {
        return [
           // Actions\DeleteAction::make(),
        ];
    }
}
