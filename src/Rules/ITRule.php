<?php

namespace src\Rules;

use src\Interfaces\ReplacementRule;

class ITRule implements ReplacementRule
{
    public function is_multiple_checker($number)
    {
        return $number % 5 == 0;
    }

    public function replacement_string_definition()
    {
        return 'IT';
    }
}