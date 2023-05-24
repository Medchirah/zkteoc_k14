<?php

namespace App\Filament\Resources\ReportResource\Pages;


use App\Models\employe;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\ReportResource;

class ListReports extends ListRecords
{
    protected static string $resource = ReportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getTableQuery(): Builder
{
    return employe::select(
        DB::raw('nom a'),
        DB::raw('departement_id '),
        DB::raw('device_id '))
            ;
}
protected function resolveTableRecord(?string $key): ?Model
{
    return employe::find($key)->first();
}
}
