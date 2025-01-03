<?php

namespace Ariaieboy\LaravelPersianHelpers\Macros;

use Ariaieboy\LaravelPersianHelpers\Facades\PersianHelpers;

class StrMixin
{
    public function toEnglishDigit(): \Closure
    {
        return function (?string $string, ?array $customRules = null): ?string {
            return PersianHelpers::toEnglishDigit($string, $customRules);
        };
    }

    public function toPersianDigit(): \Closure
    {
        return function (?string $string, ?array $customRules = null): ?string {
            return PersianHelpers::toPersianDigit($string, $customRules);
        };
    }

    public function toPersianLetter(): \Closure
    {
        return function (?string $string, ?array $customRules = null): ?string {
            return PersianHelpers::toPersianLetter($string, $customRules);
        };
    }

    public function toPersian(): \Closure
    {
        return function (?string $string, ?array $customRules = null): ?string {
            return PersianHelpers::toPersian($string, $customRules);
        };
    }
}
