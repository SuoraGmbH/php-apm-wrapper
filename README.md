
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is a wrapper for APMs in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/suora/apm-wrapper.svg?style=flat-square)](https://packagist.org/packages/suoragmbh/apm-wrapper)
[![Tests](https://github.com/suoragmbh/apm-wrapper/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/suoragmbh/apm-wrapper/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/suora/apm-wrapper.svg?style=flat-square)](https://packagist.org/packages/suoragmbh/apm-wrapper)

This package is work in progress and might never be production ready.

## Installation

You can install the package via composer:

```bash
composer require suora/apm-wrapper
```

## Usage

```php
$skeleton = new Suora\ApmWrapper();
echo $skeleton->echoPhrase('Hello, Suora!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Hans-Christian Otto](https://github.com/SuoraGmbH)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
