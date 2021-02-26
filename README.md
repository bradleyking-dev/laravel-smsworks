# bradleyking-dev/laravel-smsworks

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bradleyking-dev/laravel-smsworks.svg?style=flat-square)](https://packagist.org/packages/bradleyking-dev/laravel-smsworks)
[![Build Status](https://img.shields.io/travis/bradleyking-dev/laravel-smsworks/master.svg?style=flat-square)](https://travis-ci.org/bradleyking-dev/laravel-smsworks)
[![Quality Score](https://img.shields.io/scrutinizer/g/bradleyking-dev/laravel-smsworks.svg?style=flat-square)](https://scrutinizer-ci.com/g/bradleyking-dev/laravel-smsworks)
[![Total Downloads](https://img.shields.io/packagist/dt/bradleyking-dev/laravel-smsworks.svg?style=flat-square)](https://packagist.org/packages/bradleyking-dev/laravel-smsworks)

SMS Works SDK for Laravel

## Installation

You can install the package via composer:

```bash
composer require bradleyking-dev/laravel-smsworks
```

## Usage

``` php
use BradleyKingDev\LaravelSMSWorks\SMSWorks
...
SMSWorks::sendMessage('+447777777777', 'Hello World!');
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email contact@bradley-king.com instead of using the issue tracker.

## Credits

- [Bradley King](https://github.com/bradleyking-dev)
- [TheSMSWorks](https://github.com/TheSMSWorks)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
