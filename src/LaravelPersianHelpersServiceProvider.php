<?php

namespace Ariaieboy\LaravelPersianHelpers;

use Ariaieboy\LaravelPersianHelpers\Commands\LaravelPersianHelpersCommand;
use Ariaieboy\LaravelPersianHelpers\Macros\StrMixin;
use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPersianHelpersServiceProvider extends PackageServiceProvider
{
    /**
     * @throws \ReflectionException
     */
    public function bootingPackage(): void
    {
        Str::mixin(new StrMixin);
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-persian-helpers')
            ->hasConfigFile();
    }
}
