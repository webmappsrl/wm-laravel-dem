<?php

namespace Webmappsrl\WmLaravelDem\Commands;

use Illuminate\Console\Command;

class WmLaravelDemCommand extends Command
{
    public $signature = 'wm-laravel-dem';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
