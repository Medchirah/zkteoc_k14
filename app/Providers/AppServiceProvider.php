<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                     ->label('gestion des employes')
                     ->icon('heroicon-s-shopping-cart'),
                NavigationGroup::make()
                    ->label('gestion des departements')
                    ->icon('heroicon-s-pencil')
                    ->collapsed(),
                
            ]);
        });
    }
}
