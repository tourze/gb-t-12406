# GB/T 12406

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)
[![PHP Version Require](https://img.shields.io/packagist/php-v/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)
[![License](https://img.shields.io/packagist/l/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)
[![Build Status](https://img.shields.io/travis/tourze/gb-t-12406/master.svg?style=flat-square)](https://travis-ci.org/tourze/gb-t-12406)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-12406.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-12406)
[![Coverage Status](https://img.shields.io/coveralls/tourze/gb-t-12406/master.svg?style=flat-square)](https://coveralls.io/github/tourze/gb-t-12406?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)

A PHP package that implements the GB/T 12406 standard for currency codes, based on PHP 8.1+ enum, providing type-safe and convenient currency code handling.

## Features

- **Complete GB/T 12406 Implementation**: All 285 international currency codes
- **Type-safe PHP 8.1+ Enum**: Full IDE autocompletion and type safety
- **Multilingual Labels**: Chinese names for all currency codes
- **Flexible Data Export**: Multiple format support (array, select options)
- **Dynamic Configuration**: Environment-based option filtering
- **Historical Currency Support**: Includes deprecated currencies (DEM, FRF, etc.)
- **Framework Agnostic**: Works with any PHP framework or standalone

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

// Get currency Chinese name
echo $currency->getLabel(); // Output: 人民币

// Get all available currencies
$allCurrencies = Currency::cases(); // Returns all 285 currencies

// Convert currency to array item
$item = Currency::CNY->toArray();
// [
//     'value' => 'CNY',
//     'label' => '人民币'
// ]

// Convert to select item (for frontend)
$selectItem = Currency::CNY->toSelectItem();
// [
//     'value' => 'CNY',
//     'label' => '人民币',
//     'text' => '人民币',
//     'name' => '人民币'
// ]
```

## API Reference

### Basic Methods

- **`getLabel(): string`** - Get Chinese name of the currency
- **`toArray(): array`** - Convert to simple key-value array
- **`toSelectItem(): array`** - Convert to select option with multiple aliases
- **`Currency::cases(): array`** - Get all available currency enums
- **`Currency::from(string $value): Currency`** - Create enum from currency code
- **`Currency::tryFrom(string $value): ?Currency`** - Safe creation, returns null if invalid

### Advanced Features

#### Generate Options List

```php
// Generate all available options
$options = Currency::genOptions();
// Returns array of ['value' => 'CODE', 'label' => 'Name'] items
```

#### Dynamic Option Filtering

```php
// Disable specific currencies from options
$_ENV['enum-display:' . Currency::class . '-CNY'] = false;
$_ENV['enum-display:' . Currency::class . '-USD'] = false;

$filteredOptions = Currency::genOptions();
// CNY and USD will be excluded from the list
```

### Common Currency Examples

```php
Currency::CNY->getLabel(); // "人民币"
Currency::USD->getLabel(); // "美元"
Currency::EUR->getLabel(); // "欧元"
Currency::JPY->getLabel(); // "日元"
Currency::GBP->getLabel(); // "英镑"
```

## Extended Features

This package relies on `tourze/enum-extra` for:
- `Labelable` interface for label support
- `Itemable` interface for array conversion
- `Selectable` interface for option generation
- Dynamic configuration via environment variables

## Contributing

Feel free to submit issues and PRs. Please follow PSR standards and ensure tests pass with PHPUnit before submitting.

## License

MIT License © tourze

## Changelog

See [CHANGELOG.md] or git history for details.
