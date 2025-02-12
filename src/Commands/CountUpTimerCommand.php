<?php

namespace Veroca88\CountUpTimer\Commands;

use Illuminate\Console\Command;

class CountUpTimerCommand extends Command
{
    public $signature = 'count-up-timer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
