
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is a wrapper for APMs in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/suora/apm-wrapper.svg?style=flat-square)](https://packagist.org/packages/suora/apm-wrapper)
[![Tests](https://github.com/SuoraGmbH/php-apm-wrapper/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/SuoraGmbH/php-apm-wrapper/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/suora/apm-wrapper.svg?style=flat-square)](https://packagist.org/packages/suora/apm-wrapper)

Most APMs in the PHP ecosystem automatically track requests and errors. 
However, if you implement background jobs, you might need to manually track them,
especially if one PHP process runs multiple jobs.
This project might help you. :)

**This package is work in progress and might never be production ready.**


## Installation

You can install the package via composer:

```bash
composer require suora/apm-wrapper
```

## Usage

```php
$profiler = new \Suora\ApmWrapper\Profiler\AutoTideways(
    'your-token',
    'workerpool'
);

foreach ($jobs as $job) {
    $profiler->startTransaction($job->getName());
    $profiler->addParameter('jobId', $job->getId());

    $job->run();

    $profiler->endTransaction();
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Suora GmbH](https://github.com/SuoraGmbH)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
