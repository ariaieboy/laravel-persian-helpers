<?php

namespace Ariaieboy\LaravelPersianHelpers\Commands;

use Illuminate\Console\Command;

class LaravelPersianHelpersCommand extends Command
{
    public $signature = 'laravel-persian-helpers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
