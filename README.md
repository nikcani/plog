# plog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nikcani/plog.svg?style=flat-square)](https://packagist.org/packages/nikcani/plog)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nikcani/plog/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nikcani/plog/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nikcani/plog/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nikcani/plog/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nikcani/plog.svg?style=flat-square)](https://packagist.org/packages/nikcani/plog)

simple opinionated laravel logger

## Installation

You can install the package via composer:

```bash
composer require nikcani/plog
```

## Usage

```php
$output = plog($mixed_value);

// or

dlog($mixed_value);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
