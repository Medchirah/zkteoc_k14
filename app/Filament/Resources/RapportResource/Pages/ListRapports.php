<?php

namespace App\Filament\Resources\RapportResource\Pages;

use App\Models\employe;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\RapportResource;

class ListRapports extends ListRecords
{
    protected static string $resource = RapportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    /*protected function getTableQuery(): Builder
{
    return employe::select(
        DB::raw('nom as id'),
        DB::raw('departement_id as date'),
        DB::raw('device_id as total'))
            ->orderBy('date_travail', 'DESC')
            ->groupBy('date_travail');
}*/
}
