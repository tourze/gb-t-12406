<?php

namespace Tourze\GBT12406\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT12406\Currency;

/**
 * Currency 枚举标签功能测试
 */
class CurrencyLabelTest extends TestCase
{
    /**
     * 验证所有货币的标签都不为空
     */
    public function testAllLabelsNotEmpty(): void
    {
        foreach (Currency::cases() as $currency) {
            $label = $currency->getLabel();
            $this->assertNotEmpty($label);
            $this->assertIsString($label);
        }
    }

    /**
     * 验证常见货币的标签是否正确
     */
    public function testCommonCurrencyLabels(): void
    {
        $this->assertSame('人民币', Currency::CNY->getLabel());
        $this->assertSame('美元', Currency::USD->getLabel());
        $this->assertSame('欧元', Currency::EUR->getLabel());
        $this->assertSame('日元', Currency::JPY->getLabel());
        $this->assertSame('英镑', Currency::GBP->getLabel());
        $this->assertSame('港元', Currency::HKD->getLabel());
        $this->assertSame('新台币', Currency::TWD->getLabel());
        $this->assertSame('澳大利亚元', Currency::AUD->getLabel());
        $this->assertSame('加拿大元', Currency::CAD->getLabel());
        $this->assertSame('瑞士法郎', Currency::CHF->getLabel());
    }

    /**
     * 验证已废弃货币的标签
     */
    public function testLabelForObsoleteCurrencies(): void
    {
        // 测试一些已废弃的货币代码
        $this->assertSame('德国马克', Currency::DEM->getLabel());
        $this->assertSame('法国法郎', Currency::FRF->getLabel());
        $this->assertSame('意大利里拉', Currency::ITL->getLabel());
        $this->assertSame('西班牙比塞塔', Currency::ESP->getLabel());
        $this->assertSame('希腊德拉克马', Currency::GRD->getLabel());
    }

    /**
     * 验证特殊货币的标签
     */
    public function testLabelForRareAndSpecialCurrencies(): void
    {
        // 测试一些不常见或特殊的货币代码
        $this->assertSame('中非法郎', Currency::XAF->getLabel());
        $this->assertSame('不丹努尔特鲁姆', Currency::BTN->getLabel());
        $label = Currency::CNX->getLabel();
        $this->assertStringContainsString('Chinese People', $label);
        $this->assertStringContainsString('Bank Dollar', $label);
        $this->assertSame('RINET 基金', Currency::XRE->getLabel());
        $this->assertSame('欧洲货币单位', Currency::XEU->getLabel());
    }

    /**
     * 验证标签中含特殊字符的情况
     */
    public function testLabelsWithSpecialCharacters(): void
    {
        // 测试标签中包含特殊字符的情况
        $cubcLabel = Currency::CUC->getLabel();
        $this->assertStringContainsString('古巴可兑换比索', $cubcLabel);

        $belgiumLabel = Currency::BEC->getLabel();
        $this->assertStringContainsString('（可兑换）', $belgiumLabel);
    }

    /**
     * 特定样本对比测试
     */
    public function testLabelSampleComparison(): void
    {
        // 随机抽取 5 个货币代码进行标签测试
        $sampleCurrencies = [
            'KRW' => '韩元',
            'RUB' => '俄罗斯卢布',
            'INR' => '印度卢比',
            'BRL' => '巴西雷亚尔',
            'ZAR' => '南非兰特'
        ];

        foreach ($sampleCurrencies as $code => $expectedLabel) {
            $currency = Currency::from($code);
            $this->assertSame($expectedLabel, $currency->getLabel());
        }
    }
}
