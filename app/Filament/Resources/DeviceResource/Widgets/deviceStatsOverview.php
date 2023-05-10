<?php

namespace App\Filament\Resources\DeviceResource\Widgets;

use App\Models\device;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class deviceStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make(' all devices', device::all()->count())
            ->description('total')
            ->descriptionIcon('heroicon-s-calculator')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('bleu'),
            Card::make(' all devices', device::all()->count())
            ->description('connected')
            ->descriptionIcon('heroicon-s-lock-open')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
            Card::make(' all devices', device::all()->count())
            ->description('unconnected')
            ->descriptionIcon('heroicon-s-lock-closed')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('danger'),
        ];
    }
}
