<?php

namespace Ariaieboy\LaravelPersianHelpers\Convertor;

class Convertor
{
    /**
     * @param  array<string,string>  $rules
     */
    public function __construct(public array $rules = []) {}

    public function convert(string $input): string
    {
        return strtr($input, $this->rules);
    }
}
