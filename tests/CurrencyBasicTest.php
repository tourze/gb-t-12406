<?php

namespace Tourze\GBT12406\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\GBT12406\Currency;
use ValueError;

/**
 * Currency 枚举基本功能测试
 */
class CurrencyBasicTest extends TestCase
{
    /**
     * 测试枚举类存在且实现了预期接口
     */
    public function testEnumExists(): void
    {
        $this->assertTrue(class_exists(Currency::class));
        $this->assertTrue(enum_exists(Currency::class));
        $this->assertTrue(is_subclass_of(Currency::class, \BackedEnum::class));
        $this->assertTrue(is_subclass_of(Currency::class, Labelable::class));
        $this->assertTrue(is_subclass_of(Currency::class, Itemable::class));
        $this->assertTrue(is_subclass_of(Currency::class, Selectable::class));
    }

    /**
     * 验证所有货币代码都是3个大写字母
     */
    public function testAllCurrencyCodesFormat(): void
    {
        foreach (Currency::cases() as $currency) {
            $this->assertMatchesRegularExpression('/^[A-Z]{3}$/', $currency->value);
            $this->assertSame($currency->value, $currency->name);
        }
    }

    /**
     * 验证所有货币代码都是唯一的
     */
    public function testAllCurrencyCodesUnique(): void
    {
        $currencyCodes = array_map(
            fn(Currency $currency) => $currency->value,
            Currency::cases()
        );

        $uniqueCodes = array_unique($currencyCodes);
        $this->assertCount(count($currencyCodes), $uniqueCodes);
    }

    /**
     * 验证 cases() 方法返回所有定义的枚举值
     */
    public function testCasesMethod(): void
    {
        $cases = Currency::cases();
        $this->assertNotEmpty($cases);

        // 测试一些常见货币是否存在
        $currencyCodes = array_map(fn(Currency $c) => $c->value, $cases);
        $this->assertContains('CNY', $currencyCodes);
        $this->assertContains('USD', $currencyCodes);
        $this->assertContains('EUR', $currencyCodes);
        $this->assertContains('JPY', $currencyCodes);
        $this->assertContains('GBP', $currencyCodes);
    }

    /**
     * 测试通过有效字符串获取枚举实例
     */
    public function testFromValidValue(): void
    {
        $cny = Currency::from('CNY');
        $this->assertSame(Currency::CNY, $cny);
        $this->assertSame('CNY', $cny->value);

        $usd = Currency::from('USD');
        $this->assertSame(Currency::USD, $usd);
        $this->assertSame('USD', $usd->value);
    }

    /**
     * 测试通过无效字符串获取枚举实例时抛出异常
     */
    public function testFromInvalidValue(): void
    {
        $this->expectException(ValueError::class);
        Currency::from('INVALID');
    }

    /**
     * 测试尝试使用小写货币代码时的行为
     */
    public function testCaseInsensitivity(): void
    {
        $this->expectException(ValueError::class);
        Currency::from('cny');
    }
}
