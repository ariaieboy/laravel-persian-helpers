<?php

namespace Ariaieboy\LaravelPersianHelpers\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class BaseMiddleware extends TransformsRequest
{
    /**
     * @var string[]
     */
    protected array $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
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