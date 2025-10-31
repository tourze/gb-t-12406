<?php

declare(strict_types=1);

namespace Tourze\GBT12406\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use Tourze\GBT12406\Currency;
use Tourze\PHPUnitEnum\AbstractEnumTestCase;

/**
 * @internal
 */
#[CoversClass(Currency::class)]
final class CurrencyTest extends AbstractEnumTestCase
{
    public function testEnumHasCorrectValues(): void
    {
        $this->assertCount(285, Currency::cases());
        $this->assertInstanceOf(Currency::class, Currency::CNY);
    }

    public function testGetLabel(): void
    {
        $this->assertSame('人民币', Currency::CNY->getLabel());
        $this->assertSame('美元', Currency::USD->getLabel());
        $this->assertSame('欧元', Currency::EUR->getLabel());
    }

    public function testLabelableInterface(): void
    {
        $currency = Currency::USD;
        $this->assertSame('美元', $currency->getLabel());
    }

    public function testFromValue(): void
    {
        $currency = Currency::from('USD');
        $this->assertSame(Currency::USD, $currency);
        $this->assertSame('USD', $currency->value);
    }

    public function testTryFromValue(): void
    {
        $currency = Currency::tryFrom('EUR');
        $this->assertSame(Currency::EUR, $currency);
    }

    public function testTryFromInvalidValue(): void
    {
        $result = Currency::tryFrom('INVALID');
        /** @phpstan-ignore-next-line This test verifies expected null return behavior */
        $this->assertNull($result, 'tryFrom should return null for invalid currency code');
    }

    /**
     * 测试 toArray() 方法
     */
    public function testToArray(): void
    {
        $hkd = Currency::HKD;
        $array = $hkd->toArray();

        $this->assertArrayHasKey('value', $array);
        $this->assertArrayHasKey('label', $array);
        $this->assertSame('HKD', $array['value']);
        $this->assertSame('港元', $array['label']);
    }

    /**
     * 测试 toSelectItem() 方法
     */
}
