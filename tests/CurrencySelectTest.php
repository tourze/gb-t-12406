<?php

namespace Tourze\GBT12406\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GBT12406\Currency;

/**
 * Currency 枚举选择功能测试
 */
class CurrencySelectTest extends TestCase
{
    /**
     * 原始环境变量
     *
     * @var array
     */
    private array $originalEnv = [];

    /**
     * 测试前恢复环境变量状态
     */
    protected function setUp(): void
    {
        parent::setUp();

        // 保存原始的 $_ENV 变量，以便在测试后恢复
        $this->originalEnv = $_ENV;
    }

    /**
     * 测试后恢复环境变量状态
     */
    protected function tearDown(): void
    {
        // 恢复原始的 $_ENV 变量
        $_ENV = $this->originalEnv;

        parent::tearDown();
    }

    /**
     * 验证 genOptions() 方法返回所有选项
     */
    public function testGenOptionsMethod(): void
    {
        $options = Currency::genOptions();

        $this->assertIsArray($options);
        $this->assertNotEmpty($options);

        // 检查第一个选项的结构
        $firstOption = $options[0];
        $this->assertIsArray($firstOption);
        $this->assertArrayHasKey('value', $firstOption);
        $this->assertArrayHasKey('label', $firstOption);
        $this->assertArrayHasKey('text', $firstOption);
        $this->assertArrayHasKey('name', $firstOption);
    }

    /**
     * 验证选项数量与枚举值数量一致
     */
    public function testOptionsCount(): void
    {
        $options = Currency::genOptions();
        $cases = Currency::cases();

        $this->assertCount(count($cases), $options);
    }

    /**
     * 验证每个选项的结构正确
     */
    public function testOptionsStructure(): void
    {
        $options = Currency::genOptions();

        foreach ($options as $option) {
            $this->assertIsArray($option);
            $this->assertArrayHasKey('value', $option);
            $this->assertArrayHasKey('label', $option);
            $this->assertArrayHasKey('text', $option);
            $this->assertArrayHasKey('name', $option);

            // 值应该是三个大写字母
            $this->assertMatchesRegularExpression('/^[A-Z]{3}$/', $option['value']);

            // 标签、文本和名称应该是相同的
            $this->assertSame($option['label'], $option['text']);
            $this->assertSame($option['label'], $option['name']);
        }
    }

    /**
     * 测试环境变量对选项显示的控制
     */
    public function testEnvironmentVariableControl(): void
    {
        // 默认情况下，所有选项都可见
        $allOptions = Currency::genOptions();
        $allCount = count($allOptions);

        // 使用环境变量禁用一个选项
        $_ENV['enum-display:' . Currency::class . '-CNY'] = false;

        // 重新获取选项
        $filteredOptions = Currency::genOptions();
        $filteredCount = count($filteredOptions);

        // 应该比原来少一个选项
        $this->assertEquals($allCount - 1, $filteredCount);

        // 确认 CNY 不在选项中
        $values = array_column($filteredOptions, 'value');
        $this->assertNotContains('CNY', $values);

        // 清除环境变量设置
        unset($_ENV['enum-display:' . Currency::class . '-CNY']);

        // 恢复后，选项数量应该恢复
        $restoredOptions = Currency::genOptions();
        $this->assertCount($allCount, $restoredOptions);
    }

    /**
     * 测试禁用多个选项的情况
     */
    public function testMultipleDisabledOptions(): void
    {
        // 默认情况下，所有选项都可见
        $allOptions = Currency::genOptions();
        $allCount = count($allOptions);

        // 禁用三个选项
        $_ENV['enum-display:' . Currency::class . '-CNY'] = false;
        $_ENV['enum-display:' . Currency::class . '-USD'] = false;
        $_ENV['enum-display:' . Currency::class . '-EUR'] = false;

        // 重新获取选项
        $filteredOptions = Currency::genOptions();

        // 应该比原来少三个选项
        $this->assertEquals($allCount - 3, count($filteredOptions));

        // 确认这三个货币不在选项中
        $values = array_column($filteredOptions, 'value');
        $this->assertNotContains('CNY', $values);
        $this->assertNotContains('USD', $values);
        $this->assertNotContains('EUR', $values);
    }
}
