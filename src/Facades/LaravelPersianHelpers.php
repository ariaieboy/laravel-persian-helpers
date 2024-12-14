<?php

namespace Ariaieboy\LaravelPersianHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ariaieboy\LaravelPersianHelpers\LaravelPersianHelpers
 */
class LaravelPersianHelpers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ariaieboy\LaravelPersianHelpers\LaravelPersianHelpers::class;
    }
}
