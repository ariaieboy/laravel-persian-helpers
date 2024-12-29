<?php

namespace Ariaieboy\LaravelPersianHelpers\Http\Middleware;

use Ariaieboy\LaravelPersianHelpers\Facades\PersianHelpers;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;
use Override;

class ToPersianLetter extends BaseMiddleware
{
    protected function transform(mixed $key, mixed $value): mixed
    {
        if ($this->shouldSkip($key,$this->except)||!is_string($value)) {
            return $value;
        }
        return PersianHelpers::toPersianLetter($value);
    }
}