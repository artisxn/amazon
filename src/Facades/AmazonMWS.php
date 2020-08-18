<?php

namespace codicastudio\LaravelAmazonMWS\Facades;

use Illuminate\Support\Facades\Facade;

class AmazonMWS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'amazon-mws';
    }
}
