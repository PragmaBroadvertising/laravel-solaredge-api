<?php

namespace PragmaBroadvertising\SolarEdge\Facades;

use Illuminate\Support\Facades\Facade;

class SolarEdge extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'solaredge';
    }
}