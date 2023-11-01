<?php

namespace Webmappsrl\WmLaravelDem\Commands;

use Illuminate\Console\Command;

class WmLaravelDemCommand extends Command
{
    public $signature = 'wm-laravel-dem:fake';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment(config('wm-laravel-dem.command-output'));

        return self::SUCCESS;
    }
}
