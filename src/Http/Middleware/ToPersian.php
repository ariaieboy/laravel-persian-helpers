<?php

namespace Ariaieboy\LaravelPersianHelpers\Http\Middleware;

use Ariaieboy\LaravelPersianHelpers\Facades\PersianHelpers;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;
use Override;

class ToPersian extends BaseMiddleware
{

    protected function transform(mixed $key, mixed $value): mixed
    {
        if ($this->shouldSkip($key,$this->except)) {
            return $value;
        }
        return PersianHelpers::toPersian($value);
    }
}