<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Collective\Html\HtmlBuilder
 */
class ResponseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'response';
    }
}
