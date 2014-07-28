<?php namespace Formandsystem\Utilities\Facades;

use Illuminate\Support\Facades\Facade;

class CacheFilter extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'cachefilter'; }

}