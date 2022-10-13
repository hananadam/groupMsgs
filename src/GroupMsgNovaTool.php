<?php

namespace Wloop\GroupMessages;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Wloop\GroupMessages\Nova\Contact;
use Wloop\GroupMessages\Nova\GroupContact;

class GroupMsgNovaTool extends Tool
{
    public function boot()
    {
        Nova::resources([
            Contact::class,
            GroupContact::class,
        ]);
    }

    public function name()
    {
        return 'Group Message Nova';
    }
}

