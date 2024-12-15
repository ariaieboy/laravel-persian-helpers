<?php

use Ariaieboy\LaravelPersianHelpers\Convertor\Convertor;

it('can convert strings using custom rules', function () {
    $rules = [
        '1' => '۱',
        '2' => '۲',
    ];
    $convertor = new Convertor($rules);
    expect($convertor->convert('1221'))->toBe('۱۲۲۱');
});
