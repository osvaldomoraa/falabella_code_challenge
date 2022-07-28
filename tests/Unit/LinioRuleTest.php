<?php
declare(strict_types=1);

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use src\Rules\LinioRule;

final class LinioRuleTest extends TestCase
{
    public function test_linio_rule_is_multiple_checker()
    {
        $linio_rule = new LinioRule();
        $this->assertTrue($linio_rule->is_multiple_checker(6));
        $this->assertTrue($linio_rule->is_multiple_checker(9));
        $this->assertTrue($linio_rule->is_multiple_checker(12));
        $this->assertFalse($linio_rule->is_multiple_checker(7));
        $this->assertFalse($linio_rule->is_multiple_checker(10));
        $this->assertFalse($linio_rule->is_multiple_checker(13));
    }
    
    public function test_linio_rule_replacement_string_definition()
    {
        $linio_rule = new LinioRule();
        $this->assertEquals('Linio', $linio_rule->replacement_string_definition());
    }
}