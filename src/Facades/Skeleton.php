<?php

namespace  Adam\groupMsgs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Adam\groupMsgs\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Adam\groupMsgs\Skeleton::class;
    }
}
