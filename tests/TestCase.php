<?php

namespace Webmappsrl\WmLaravelDem\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;
use Webmappsrl\WmLaravelDem\WmLaravelDemServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Webmappsrl\\WmLaravelDem\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            WmLaravelDemServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // config()->set('database.default', 'testing');
        Schema::dropAllTables();

        $migration = include __DIR__.'/../database/migrations/create_wm_laravel_dem_table.php.stub';
        $migration->up();
    }
}
