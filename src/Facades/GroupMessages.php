<?php

namespace  Wloop\GroupMessages\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see Wloop\GroupMessages\GroupMessages
 */
class GroupMessages extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wloop\GroupMessages\GroupMessages::class;
    }
}
