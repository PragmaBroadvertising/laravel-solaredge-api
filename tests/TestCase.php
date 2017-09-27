<?php
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 27/09/2017
 * Time: 22:05
 */

namespace PragmaBroadvertising\SolarEdge\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use PragmaBroadvertising\SolarEdge\SolarEdgeServiceProvider;

abstract class TestCase extends BaseTestCase
{
    function setUp() {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            SolarEdgeServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'SolarEdge' => 'PragmaBroadvertising\SolarEdge\Facades\SolarEdge'
        ];
    }
}