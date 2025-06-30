<?php

namespace Tourze\GBT12406\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT12406\Currency;

/**
 * Currency 枚举项目转换功能测试
 */
class CurrencyItemTest extends TestCase
{
    /**
     * 验证 toArray() 方法返回正确结构
     */
    public function testToArrayMethod(): void
    {
        $cny = Currency::CNY;
        $array = $cny->toArray();

        $this->assertArrayHasKey('value', $array);
        $this->assertArrayHasKey('label', $array);
        $this->assertSame('CNY', $array['value']);
        $this->assertSame('人民币', $array['label']);

        // 测试其他货币
        $usd = Currency::USD;
        $array = $usd->toArray();
        $this->assertSame('USD', $array['value']);
        $this->assertSame('美元', $array['label']);
    }

    /**
     * 验证 toSelectItem() 方法返回正确结构
     */
    public function testToSelectItemMethod(): void
    {
        $cny = Currency::CNY;
        $item = $cny->toSelectItem();

        $this->assertArrayHasKey('value', $item);
        $this->assertArrayHasKey('label', $item);
        $this->assertArrayHasKey('text', $item);
        $this->assertArrayHasKey('name', $item);

        $this->assertSame('CNY', $item['value']);
        $this->assertSame('人民币', $item['label']);
        $this->assertSame('人民币', $item['text']);
        $this->assertSame('人民币', $item['name']);
    }

    /**
     * 验证转换后的数组结构一致性
     */
    public function testArrayStructureConsistency(): void
    {
        // 随机抽取 5 个货币代码进行结构测试
        $currencies = [
            Currency::EUR,
            Currency::GBP,
            Currency::JPY,
            Currency::CAD,
            Currency::AUD
        ];

        foreach ($currencies as $currency) {
            $array = $currency->toArray();
            $this->assertCount(2, $array);
            $this->assertArrayHasKey('value', $array);
            $this->assertArrayHasKey('label', $array);
            $this->assertSame($currency->value, $array['value']);
            $this->assertSame($currency->getLabel(), $array['label']);

            $selectItem = $currency->toSelectItem();
            $this->assertCount(4, $selectItem);
            $this->assertArrayHasKey('value', $selectItem);
            $this->assertArrayHasKey('label', $selectItem);
            $this->assertArrayHasKey('text', $selectItem);
            $this->assertArrayHasKey('name', $selectItem);
        }
    }

    /**
     * 验证特殊情况下的项目转换
     */
    public function testSpecialCasesToArray(): void
    {
        // 测试标签中包含特殊字符的货币
        $currency = Currency::CNX;
        $array = $currency->toArray();
        $this->assertSame('CNX', $array['value']);
        $this->assertStringContainsString('Chinese People', $array['label']);
        $this->assertStringContainsString('Bank Dollar', $array['label']);

        // 测试标签中包含空格和符号的货币
        $currency = Currency::UGS;
        $array = $currency->toArray();
        $this->assertStringContainsString('(', $array['label']);
        $this->assertStringContainsString(')', $array['label']);
    }
}
