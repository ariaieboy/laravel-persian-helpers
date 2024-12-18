<?php

namespace Ariaieboy\LaravelPersianHelpers;

use Ariaieboy\LaravelPersianHelpers\Convertor\Convertor;

class LaravelPersianHelpers
{
    public function toEnglishDigit(string $string, ?array $customRules = null): string
    {
        $rules = !blank($customRules) ? $customRules : config('persian-helpers.rules.to_english_digit');
        return new Convertor($rules)->convert($string);
    }

    public function toPersianDigit(string $string, ?array $customRules = null): string
    {
        $rules = !blank($customRules) ? $customRules : config('persian-helpers.rules.to_persian_digit');

        return new Convertor($rules)->convert($string);
    }

    public function toPersianLetter(string $string, ?array $customRules = null): string
    {
        $rules = !blank($customRules) ? $customRules : config('persian-helpers.rules.to_persian_letter');

        return new Convertor($rules)->convert($string);
    }

    public function toPersian(string $string, ?array $customRules = null): string
    {

        $rules = !blank($customRules) ? $customRules : array_merge(config('persian-helpers.rules.to_persian_digit'), config('persian-helpers.rules.to_persian_letter'));

        return new Convertor($rules)->convert($string);

    }
}
