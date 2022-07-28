<?php
declare(strict_types=1);

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use src\Rules\LinianosRule;

final class LinianosRuleTest extends TestCase
{
    public function test_linianos_rule_is_multiple_checker()
    {
        $linianos_rule = new LinianosRule();
        $this->assertTrue($linianos_rule->is_multiple_checker(30));
        $this->assertTrue($linianos_rule->is_multiple_checker(45));
        $this->assertTrue($linianos_rule->is_multiple_checker(60));
        $this->assertFalse($linianos_rule->is_multiple_checker(33));
        $this->assertFalse($linianos_rule->is_multiple_checker(48));
        $this->assertFalse($linianos_rule->is_multiple_checker(63));
    }
    
    public function test_linianos_rule_replacement_string_definition()
    {
        $linianos_rule = new LinianosRule();
        $this->assertEquals('Linianos', $linianos_rule->replacement_string_definition());
    }
}