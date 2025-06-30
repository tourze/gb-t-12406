<?php

namespace Tourze\GBT12406\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tourze\GBT12406\Currency;

class CurrencyTest extends TestCase
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
        
        $invalid = Currency::tryFrom('INVALID');
        $this->assertNull($invalid);
    }
}