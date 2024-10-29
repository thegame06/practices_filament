<?php

namespace App\Providers;

use BezhanSalleh\PanelSwitch\PanelSwitch;
use Illuminate\Support\ServiceProvider;

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
        //
        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            // Custom configurations go here
            $panelSwitch
            ->panels(['dashboard', 'personal'])
            ->modalWidth('sm')
            ->slideOver()
            ->icons([
                'dashboard' => 'heroicon-o-square-2-stack',
                'personal' => 'heroicon-o-star',
            ])
            ->iconSize(16)
            ->labels([
                'dashboard' => 'Administrador',
                'personal' => 'Empleado'
            ])
            ->visible(fn (): bool => auth()->user()?->hasAnyRole([
                'super_admin',
            ]));

        });     
    }
}
