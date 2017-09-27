# laravel-solaredge-api

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A Laravel package to seamlessly connect to the SolarEdge API. The API provides your application with date from your solar panel network.

**NOTE: This package is still in development and will be subject to change.**

## Install

Via Composer

``` bash
composer require pragmabroadvertising/laravel-solaredge-api
```


## Setup
1. Publish the provider:
    ``` bash
    php artisan vendor:publish --provider="PragmaBroadvertising\SolarEdge\SolarEdgeServiceProvider" --tag=laravel-solaredge-api
    ```
2. Add the service provider in your config/app.php providers array
    ``` bash
    'providers' => [
        PragmaBroadvertising\SolarEdge\SolarEdgeServiceProvider
    ];
    ```
3. Add the alias in your config/app.php aliases array
    ``` bash
    'aliases' => [
        'SolarEdge' => PragmaBroadvertising\SolarEdge\Facades\SolarEdge::class
    ];
    ```
## Usage

``` php
$solaredge = new SolarEdge();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email development@pragma.be instead of using the issue tracker.

## Credits

- [Evert Arnould][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pragmabroadvertising/laravel-solaredge-api.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pragmabroadvertising/laravel-solaredge-api/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/pragmabroadvertising/laravel-solaredge-api.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/pragmabroadvertising/laravel-solaredge-api.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pragmabroadvertising/laravel-solaredge-api.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pragmabroadvertising/laravel-solaredge-api
[link-travis]: https://travis-ci.org/pragmabroadvertising/laravel-solaredge-api
[link-scrutinizer]: https://scrutinizer-ci.com/g/pragmabroadvertising/laravel-solaredge-api/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/pragmabroadvertising/laravel-solaredge-api
[link-downloads]: https://packagist.org/packages/pragmabroadvertising/laravel-solaredge-api
[link-author]: https://github.com/pragmaniac
[link-contributors]: ../../contributors