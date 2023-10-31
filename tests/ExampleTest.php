<?php

use Webmappsrl\WmLaravelDem\Commands\WmLaravelDemCommand;

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(WmLaravelDemCommand::class)->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});
