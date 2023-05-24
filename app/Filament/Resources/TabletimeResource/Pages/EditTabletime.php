<?php

namespace App\Filament\Resources\TabletimeResource\Pages;

use App\Filament\Resources\TabletimeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTabletime extends EditRecord
{
    protected static string $resource = TabletimeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
