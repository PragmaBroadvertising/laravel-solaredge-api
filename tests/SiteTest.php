<?php
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 25/09/2017
 * Time: 02:14
 */

namespace PragmaBroadvertising\SolarEdge\Tests;

use PragmaBroadvertising\SolarEdge\Facades\SolarEdge;

class SiteTest extends TestCase
{
    /**
     * Return details
     *
     * @test
     */
    public function should_return_site_details()
    {
        config(['laravel-solaredge-api.endpoint' => 'http://www.mocky.io/v2/59cc26da2600006c106b7780/']);
        $this->assertInstanceOf('Illuminate\Support\Collection', SolarEdge::details());
    }

    /**
     * Return energy - ASC
     *
     * @test
     */
    public function should_return_site_energy_ascending()
    {
        config(['laravel-solaredge-api.endpoint' => 'http://www.mocky.io/v2/59cc2c97260000830f6b7787/']);
        $this->assertInstanceOf('Illuminate\Support\Collection', SolarEdge::energy(7, 'asc'));
    }

    /**
     * Return energy DESC
     *
     * @test
     */
    public function should_return_site_energy_descending()
    {
        config(['laravel-solaredge-api.endpoint' => 'http://www.mocky.io/v2/59cc2c97260000830f6b7787/']);
        $this->assertInstanceOf('Illuminate\Support\Collection', SolarEdge::energy(7, 'desc'));
    }

    /**
     * Return power - ASC
     *
     * @test
     */
    public function should_return_site_power_ascending()
    {
        config(['laravel-solaredge-api.endpoint' => 'http://www.mocky.io/v2/59cc2d2926000062106b778a/']);
        $this->assertInstanceOf('Illuminate\Support\Collection', SolarEdge::power(7, 'asc'));
    }

    /**
     * Return power - DESC
     *
     * @test
     */
    public function should_return_site_power_descending()
    {
        config(['laravel-solaredge-api.endpoint' => 'http://www.mocky.io/v2/59cc2d2926000062106b778a/']);
        $this->assertInstanceOf('Illuminate\Support\Collection', SolarEdge::power(7, 'desc'));
    }

    /**
     * Return overview
     *
     * @test
     */
    public function should_return_site_overview()
    {
        config(['laravel-solaredge-api.endpoint' => 'http://www.mocky.io/v2/59cc280826000060106b7781/']);
        $this->assertInstanceOf('Illuminate\Support\Collection', SolarEdge::overview());
    }
}