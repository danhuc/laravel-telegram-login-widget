<?php

namespace pschocke\TelegramLoginWidget\Facades;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Collection validate(array|Request|Collection $collection)
 * @method static Collection|bool validateWithError(array|Request|Collection $collection)
 */
class TelegramLoginWidget extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \pschocke\TelegramLoginWidget\TelegramLoginWidget::class;
    }
}
