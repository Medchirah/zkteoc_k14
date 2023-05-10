<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\device;
use App\Models\employe;
use App\Models\departement;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make(' departements number', departement::all()->count())
            ->description('existe')
            ->descriptionIcon('heroicon-s-shopping-bag')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
            Card::make(' Employes number', employe::all()->count())
            ->description('enregistres')
            ->descriptionIcon('heroicon-s-user')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
            Card::make(' Users number', User::all()->count())
            ->description('enregistres')
            ->descriptionIcon('heroicon-s-user')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
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
    protected static ?string $pollingInterval = '86400s';
}
