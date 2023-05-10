<?php

namespace App\Filament\Resources\DepartementResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\DepartementResource;
use App\Filament\Resources\DepartementResource\Widgets\departementStatsOverview;

class ManageDepartements extends ManageRecords
{
    protected static string $resource = DepartementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets():array{
        return[
            departementStatsOverview::class,
        ];
    }
}
