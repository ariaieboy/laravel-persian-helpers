<?php

namespace Ariaieboy\LaravelPersianHelpers\Macros;

use Ariaieboy\LaravelPersianHelpers\Facades\LaravelPersianHelpers;

class StrMixin
{
    public function toEnglishDigit(): \Closure
    {
        return function (string $string, ?array $customRules = null): string {
            return LaravelPersianHelpers::toEnglishDigit($string, $customRules);
        };
    }

    public function toPersianDigit(): \Closure
    {
        return function (string $string, ?array $customRules = null): string {
            return LaravelPersianHelpers::toPersianDigit($string, $customRules);
        };
    }

    public function toPersianLetter(): \Closure
    {
        return function (string $string, ?array $customRules = null): string {
            return LaravelPersianHelpers::toPersianLetter($string, $customRules);
        };
    }

    public function toPersian(): \Closure
    {
        return function (string $string, ?array $customRules = null): string {
            return LaravelPersianHelpers::toPersian($string, $customRules);
        };
    }
}
