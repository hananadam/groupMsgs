<?php

namespace Wloop\GroupMessages\Commands;

use Illuminate\Console\Command;

class GroupMessagesCommand extends Command
{
    public $signature = 'GroupMessages';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
