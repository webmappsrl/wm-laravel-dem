<?php

namespace Webmappsrl\WmLaravelDem;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webmappsrl\WmLaravelDem\Commands\WmLaravelDemCommand;

class WmLaravelDemServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wm-laravel-dem')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_wm-laravel-dem_table')
            ->hasCommand(WmLaravelDemCommand::class);
    }
}
