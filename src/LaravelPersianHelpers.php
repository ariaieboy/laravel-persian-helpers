<?php

namespace Ariaieboy\LaravelPersianHelpers;

use Ariaieboy\LaravelPersianHelpers\Convertor\Convertor;

class LaravelPersianHelpers
{
    /**
     * @param string|null $string
     * @param array<string,string>|null $customRules
     * @return string
     */
    public function toEnglishDigit(?string $string, ?array $customRules = null): ?string
    {
        if ($string === null) {
            return null;
        }
        $rules = ! blank($customRules) ? $customRules : config('persian-helpers.rules.to_english_digit');

        return new Convertor($rules)->convert($string);
    }
    /**
     * @param string|null $string
     * @param array<string,string>|null $customRules
     * @return string
     */
    public function toPersianDigit(?string $string, ?array $customRules = null): ?string
    {
        if ($string === null) {
            return null;
        }
        $rules = ! blank($customRules) ? $customRules : config('persian-helpers.rules.to_persian_digit');

        return new Convertor($rules)->convert($string);
    }
    /**
     * @param string|null $string
     * @param array<string,string>|null $customRules
     * @return string
     */
    public function toPersianLetter(?string $string, ?array $customRules = null): ?string
    {
        if ($string === null) {
            return null;
        }
        $rules = ! blank($customRules) ? $customRules : config('persian-helpers.rules.to_persian_letter');

        return new Convertor($rules)->convert($string);
    }
    /**
     * @param string|null $string
     * @param array<string,string>|null $customRules
     * @return string
     */
    public function toPersian(?string $string, ?array $customRules = null): ?string
    {
        if ($string === null) {
            return null;
        }
        $rules = ! blank($customRules) ? $customRules : array_merge(config('persian-helpers.rules.to_persian_digit'), config('persian-helpers.rules.to_persian_letter'));

        return new Convertor($rules)->convert($string);

    }
}
