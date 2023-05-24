<?php

namespace App\Filament\Resources\NewtableResource\Pages;

use App\Filament\Resources\NewtableResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewtables extends ListRecords
{
    protected static string $resource = NewtableResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
