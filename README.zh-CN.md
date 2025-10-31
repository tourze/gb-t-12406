# GB/T 12406

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)
[![PHP Version Require](https://img.shields.io/packagist/php-v/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)
[![License](https://img.shields.io/packagist/l/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)
[![Build Status](https://img.shields.io/travis/tourze/gb-t-12406/master.svg?style=flat-square)](https://travis-ci.org/tourze/gb-t-12406)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/gb-t-12406.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/gb-t-12406)
[![Coverage Status](https://img.shields.io/coveralls/tourze/gb-t-12406/master.svg?style=flat-square)](https://coveralls.io/github/tourze/gb-t-12406?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/gb-t-12406.svg?style=flat-square)](https://packagist.org/packages/tourze/gb-t-12406)

一个实现 GB/T 12406 货币代码标准的 PHP 包，基于 PHP 8.1+ 的枚举实现，提供类型安全、易于使用的货币代码处理能力。

## 功能特性

- **完整的 GB/T 12406 标准实现**：包含 285 个国际标准货币代码
- **PHP 8.1+ 枚举实现**：完整的 IDE 自动补全和类型安全
- **多语言标签支持**：每个货币都有对应的中文名称
- **灵活的数据导出**：支持多种格式（数组、选择选项）
- **动态配置**：基于环境变量的选项过滤
- **历史货币支持**：包含已废弃的货币代码（如德国马克 DEM、法国法郎 FRF）
- **框架无关**：可与任何 PHP 框架或独立使用

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
$allCurrencies = Currency::cases(); // 返回全部 285 个货币

// 货币转为数组项
$item = Currency::CNY->toArray();
// [
//     'value' => 'CNY',
//     'label' => '人民币'
// ]

// 转为选择项（适合前端）
$selectItem = Currency::CNY->toSelectItem();
// [
//     'value' => 'CNY',
//     'label' => '人民币',
//     'text' => '人民币',
//     'name' => '人民币'
// ]
```

## API 参考

### 基础方法

- **`getLabel(): string`** - 获取货币的中文名称
- **`toArray(): array`** - 转换为简单的键值对数组
- **`toSelectItem(): array`** - 转换为包含多个别名的选择项
- **`Currency::cases(): array`** - 获取所有可用的货币枚举
- **`Currency::from(string $value): Currency`** - 通过货币代码创建枚举
- **`Currency::tryFrom(string $value): ?Currency`** - 安全创建，失败返回 null

### 高级功能

#### 生成选项列表

```php
// 生成所有可用选项
$options = Currency::genOptions();
// 返回 ['value' => 'CODE', 'label' => 'Name'] 格式的数组
```

#### 动态选项过滤

```php
// 禁用特定货币显示在选项中
$_ENV['enum-display:' . Currency::class . '-CNY'] = false;
$_ENV['enum-display:' . Currency::class . '-USD'] = false;

$filteredOptions = Currency::genOptions();
// CNY 和 USD 将从列表中排除
```

### 常见货币示例

```php
Currency::CNY->getLabel(); // "人民币"
Currency::USD->getLabel(); // "美元"
Currency::EUR->getLabel(); // "欧元"
Currency::JPY->getLabel(); // "日元"
Currency::GBP->getLabel(); // "英镑"
```

## 扩展功能

该包依赖 `tourze/enum-extra` 提供：
- `Labelable` 接口用于标签支持
- `Itemable` 接口用于数组转换
- `Selectable` 接口用于选项生成
- 通过环境变量进行动态配置

## 贡献指南

欢迎提交 Issue 与 PR，建议遵循 PSR 规范，提交前请确保通过 PHPUnit 测试。

## 版权和许可

MIT License © tourze

## 更新日志

详见 [CHANGELOG.md] 或 Git 仓库提交历史。
