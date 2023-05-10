<?php

namespace App\Filament\Resources\EmployeResource\Widgets;

use Filament\Widgets\Widget;
use App\Filament\Resources\EmployeResource\Widgets\employeOverview;

class employeOverview extends Widget
{
    protected static string $view = 'filament.resources.employe-resource.widgets.employe-overview';
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
            ->color('success')
           
        ];
    }
}
