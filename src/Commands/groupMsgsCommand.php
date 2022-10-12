<?php

namespace Adam\groupMsgs\Commands;

use Illuminate\Console\Command;

class groupMsgsCommand extends Command
{
    public $signature = 'groupMsgs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
