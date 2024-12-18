<?php

namespace Ariaieboy\LaravelPersianHelpers\Http\Middleware;

use Ariaieboy\LaravelPersianHelpers\Facades\PersianHelpers;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;
use Override;

class ToEnglishDigit extends TransformsRequest
{
    /**
     * @var string[]
     */
    protected array $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    protected function transform(mixed $key, mixed $value): mixed
    {
        if ($this->shouldSkip($key,$this->except)) {
            return $value;
        }
        return PersianHelpers::toEnglishDigit($value);
    }

    /**
     * @param string $key
     * @param array<string> $except
     * @return bool
     */
    protected function shouldSkip(string $key,array $except): bool
    {
        return in_array($key, $except, true);
    }
}