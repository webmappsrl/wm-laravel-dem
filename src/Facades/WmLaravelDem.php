<?php

namespace Webmappsrl\WmLaravelDem\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webmappsrl\WmLaravelDem\WmLaravelDem
 */
class WmLaravelDem extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Webmappsrl\WmLaravelDem\WmLaravelDem::class;
    }
}
