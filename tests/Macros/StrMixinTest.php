<?php
it('will convert numbers to persian',function(){
    expect(\Illuminate\Support\Str::toPersianDigit('٠0١1٢2٣3٤4٥5٦6٧7٨8٩9'))->toBe('۰۰۱۱۲۲۳۳۴۴۵۵۶۶۷۷۸۸۹۹');
});
it('will convert numbers to english', function () {
    expect(\Illuminate\Support\Str::toEnglishDigit('٠۰١۱٢۲٣۳٤۴٥۵٦۶٧۷٨۸٩۹'))->toBe('00112233445566778899');
});
it('will convert persian letters', function () {
    expect(\Illuminate\Support\Str::toPersianLetter(',;كإأؤةۀي?'))->toBe('،؛کااوههی؟');
});
it('can convert to persian', function () {
    expect(\Illuminate\Support\Str::toPersian('٠0١1٢2٣3٤4٥5٦6٧7٨8٩9,;كإأؤةۀي?'))->toBe('۰۰۱۱۲۲۳۳۴۴۵۵۶۶۷۷۸۸۹۹،؛کااوههی؟');
});