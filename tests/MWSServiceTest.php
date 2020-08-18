<?php

namespace codicastudio\LaravelAmazonMWS\Tests;

use codicastudio\LaravelAmazonMWS\MWSFeeds;
use codicastudio\LaravelAmazonMWS\MWSOrders;
use codicastudio\LaravelAmazonMWS\MWSService;
use Orchestra\Testbench\TestCase;

class MWSServiceTest extends TestCase
{
    /** @test */
    public function get_orders_service()
    {
        $mws = new MWSService;
        $this->assertInstanceOf(MWSOrders::class, $mws->orders());
    }

    /** @test */
    public function get_feeds_service()
    {
        $mws = new MWSService;
        $this->assertInstanceOf(MWSFeeds::class, $mws->feeds());
    }
}
