<?php
declare(strict_types=1);

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use src\Rules\ITRule;

final class ITRuleTest extends TestCase
{
    public function test_it_rule_is_multiple_checker()
    {
        $it_rule = new ITRule();
        $this->assertTrue($it_rule->is_multiple_checker(10));
        $this->assertTrue($it_rule->is_multiple_checker(15));
        $this->assertTrue($it_rule->is_multiple_checker(20));
        $this->assertFalse($it_rule->is_multiple_checker(7));
        $this->assertFalse($it_rule->is_multiple_checker(13));
        $this->assertFalse($it_rule->is_multiple_checker(17));
    }
    
    public function test_it_rule_replacement_string_definition()
    {
        $it_rule = new ITRule();
        $this->assertEquals('IT', $it_rule->replacement_string_definition());
    }
}
