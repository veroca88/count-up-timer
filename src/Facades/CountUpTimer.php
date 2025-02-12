<?php

namespace Veroca88\CountUpTimer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Veroca88\CountUpTimer\CountUpTimer
 */
class CountUpTimer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Veroca88\CountUpTimer\CountUpTimer::class;
    }
}
