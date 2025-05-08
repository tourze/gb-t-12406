# GB/T 12406

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)
[![Build Status](https://img.shields.io/travis/tourze/gb-t-12406/master.svg?style=flat-square)](https://travis-ci.org/tourze/gb-t-12406)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-12406.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-12406)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)

A PHP package that implements the GB/T 12406 standard for currency codes, based on PHP 8.1+ enum, providing type-safe and convenient currency code handling.

## Features

- Full implementation of GB/T 12406 currency codes
- Type-safe PHP 8.1+ enum
- All currency codes and their English names
- IDE autocompletion support
- Easy conversion to array and label fetching

## Installation

**Requirements:**

- PHP 8.1 or above
- Dependency: `tourze/enum-extra` >= 0.0.5

Install via Composer:

```bash
composer require tourze/gb-t-12406
```

## Quick Start

```php
use Tourze\GBT12406\Currency;

// Get currency code
$currency = Currency::CNY;

// Get currency English name
echo $currency->getLabel(); // Output: Chinese Yuan

// Get all available currencies
$allCurrencies = Currency::cases();

// Convert currency to array item
$item = Currency::CNY->toItem();
// [
//     'value' => 'CNY',
//     'label' => 'Chinese Yuan'
// ]
```

## Documentation

- All currency codes are provided as enum constants, with IDE completion
- `getLabel()` gets the English name
- `toItem()` converts to array, suitable for dropdowns, etc.
- Relies on `tourze/enum-extra` for extended features

## Contributing

Feel free to submit issues and PRs. Please follow PSR standards and ensure tests pass with PHPUnit before submitting.

## License

MIT License © tourze

## Changelog

See [CHANGELOG.md] or git history for details.
