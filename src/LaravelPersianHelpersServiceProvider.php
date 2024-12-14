<?php

namespace Ariaieboy\LaravelPersianHelpers;

use Ariaieboy\LaravelPersianHelpers\Commands\LaravelPersianHelpersCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPersianHelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-persian-helpers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_persian_helpers_table')
            ->hasCommand(LaravelPersianHelpersCommand::class);
    }
}
