<?php

/**
 * Created by PhpStorm.
 * User: Phillipp
 * Date: 07.01.2015
 * Time: 20:33
 */

namespace Ohlandt\CatStatus;

use Illuminate\Support\Facades\Facade;

class CatStatusFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'catstatus';
    }
}
