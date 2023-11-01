<?php

use Webmappsrl\WmLaravelDem\Commands\WmLaravelDemCommand;

use function Pest\Laravel\artisan;

it('can output the configured value', function () {
    artisan(WmLaravelDemCommand::class)
        ->expectsOutput((config('wm-laravel-dem.command-output')))
        ->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});

it('can output another value', function () {

    config()->set('wm-laravel-dem.command-output', 'something else');

    artisan(WmLaravelDemCommand::class)
        ->expectsOutput('something else')
        ->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});
