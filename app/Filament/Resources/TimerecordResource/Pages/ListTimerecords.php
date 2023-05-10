<?php

namespace App\Filament\Resources\TimerecordResource\Pages;

use App\Filament\Resources\TimerecordResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTimerecords extends ListRecords
{
    protected static string $resource = TimerecordResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
