# GB/T 12406

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)
[![Build Status](https://img.shields.io/travis/tourze/gb-t-12406/master.svg?style=flat-square)](https://travis-ci.org/tourze/gb-t-12406)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-12406.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-12406)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)

一个实现 GB/T 12406 货币代码标准的 PHP 包，基于 PHP 8.1+ 的枚举实现，提供类型安全、易于使用的货币代码处理能力。

## 功能特性

- 完整实现 GB/T 12406 货币代码
- PHP 8.1+ 枚举实现，类型安全
- 支持所有货币代码及其中文名称
- 支持 IDE 自动补全
- 便捷的数组转换与标签获取

## 安装说明

系统要求：

- PHP 8.1 及以上
- 依赖 `tourze/enum-extra` >= 0.0.5

通过 Composer 安装：

```bash
composer require tourze/gb-t-12406
```

## 快速开始

```php
use Tourze\GBT12406\Currency;

// 获取货币代码
$currency = Currency::CNY;

// 获取货币中文名称
echo $currency->getLabel(); // 输出：人民币

// 获取所有可用货币
$allCurrencies = Currency::cases();

// 货币转为数组项
$item = Currency::CNY->toItem();
// [
//     'value' => 'CNY',
//     'label' => '人民币'
// ]
```

## 详细文档

- 所有货币代码均以枚举常量形式提供，支持 IDE 补全
- `getLabel()` 获取对应中文名称
- `toItem()` 转为数组，适合前端下拉等场景
- 依赖 `tourze/enum-extra`，支持更多扩展特性

## 贡献指南

欢迎提交 Issue 与 PR，建议遵循 PSR 规范，提交前请确保通过 PHPUnit 测试。

## 版权和许可

MIT License © tourze

## 更新日志

详见 [CHANGELOG.md] 或 Git 仓库提交历史。
