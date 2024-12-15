<?php

namespace Ariaieboy\LaravelPersianHelpers\Macros;

use Ariaieboy\LaravelPersianHelpers\Convertor\Convertor;

class StrMixin
{
    public function toEnglishDigit(): \Closure
    {
        return function (string $string, ?array $customRules = null): string {
            $rules = ! blank($customRules) ? $customRules : config('persian-helpers.to_english_digit');

            return new Convertor($rules)->convert($string);
        };
    }

    public function toPersianDigit(): \Closure
    {
        return function (string $string, ?array $customRules = null): string {
            $rules = ! blank($customRules) ? $customRules : config('persian-helpers.to_persian_digit');

            return new Convertor($rules)->convert($string);
        };
    }

    public function toPersianLetter(): \Closure
    {
        return function (string $string, ?array $customRules = null): string {
            $rules = ! blank($customRules) ? $customRules : config('persian-helpers.to_persian_letter');

            return new Convertor($rules)->convert($string);
        };
    }

    public function toPersian(): \Closure
    {
        return function (string $string, ?array $customRules = null): string {
            $rules = ! blank($customRules) ? $customRules : array_merge(config('persian-helpers.to_persian_digit'), config('persian-helpers.to_persian_letter'));

            return new Convertor($rules)->convert($string);
        };
    }
}
