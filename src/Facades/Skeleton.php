<?php

namespace  Wloop\GroupMessages\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see Wloop\GroupMessages\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wloop\GroupMessages\Skeleton::class;
    }
}
