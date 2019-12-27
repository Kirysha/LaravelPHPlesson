<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class TestBasicServiceFacade
 * @package App\Facades
 * @param get
 * @method static get()
 * @method static set()
 * @method static getException()
 * @method static getForMock(string $var)
 * @see \App\Services\TestBasicService

 */
class TestBasicServiceFacade extends Facade
{
    protected static function getFacadeAccessor()    {
        return 'service.test_one';  // алиас из сервис-провайдера
    }
}
