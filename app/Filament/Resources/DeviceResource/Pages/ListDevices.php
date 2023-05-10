<?php

namespace App\Filament\Resources\DeviceResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\DeviceResource;
use App\Filament\Resources\DeviceResource\Widgets\deviceStatsOverview;

class ListDevices extends ListRecords
{
    protected static string $resource = DeviceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets():array{
        return[
            deviceStatsOverview::class,
        ];
    }
}
