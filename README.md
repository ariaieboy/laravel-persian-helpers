# Add more functionality for Persian language into Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ariaieboy/laravel-persian-helpers.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/laravel-persian-helpers)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ariaieboy/laravel-persian-helpers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ariaieboy/laravel-persian-helpers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ariaieboy/laravel-persian-helpers/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ariaieboy/laravel-persian-helpers/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ariaieboy/laravel-persian-helpers.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/laravel-persian-helpers)

This package will add some helpers and macros to the laravel that help you work with persian language and convert non persian character and digits to persian or vise-versa.

## Installation

You can install the package via composer:

```bash
composer require ariaieboy/laravel-persian-helpers
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-persian-helpers-config"
```

## Usage
### Facade
```php
    PersianHelpers::toEnglishDigit('۱۲۳۴'); // will return "1234"

    PersianHelpers::toPersianDigit('1234٥٤'); // will return "۱۲۳۴۵۴"

    PersianHelpers::toPersianLetter(',;كإأؤةۀي?'); // will return "،؛کااوههی؟"
    
    PersianHelpers::toPersian('12ي'); // will return "۱۲ی"
```

### `Str` macros

```php
    Str::toEnglishDigit('۱۲۳۴'); // will return "1234"

    Str::toPersianDigit('1234٥٤'); // will return "۱۲۳۴۵۴"

    Str::toPersianLetter(',;كإأؤةۀي?'); // will return "،؛کااوههی؟"
    
    Str::toPersian('12ي'); // will return "۱۲ی"
```
### Middlewares
By using these middlewares all the user inputs will be converted to correct format.
```php
use Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToEnglishDigit;
use Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersianDigit;
use Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersianLetter;
use Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToPersian;
Route::post('example1')->middleware(ToEnglishDigit::class);
Route::post('example2')->middleware(ToPersianDigit::class);
Route::post('example3')->middleware(ToPersianLetter::class);
Route::post('example4')->middleware(ToPersian::class);
```
> Note: by default `current_password`,`password` and `password_confirmation` inputs are ignored and are not affected by this middleware to customize this behavior you should extend each of this middleware and change the `$except` property of the middleware

```php
class MyCustomToEnglishDigitMiddleware extends \Ariaieboy\LaravelPersianHelpers\Http\Middleware\ToEnglishDigit{
    /**
    * @var array<string> 
    */
    protected array $except = [
    'title',
    'password'
];
}

Route::post('example')->middleware(MyCustomToEnglishDigitMiddleware::class);
```
## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AriaieBOY](https://github.com/ariaieboy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
