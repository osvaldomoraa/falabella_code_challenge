<?php

namespace src\Rules;

use src\Interfaces\ReplacementRule;

class LinioRule implements ReplacementRule
{
    public function is_multiple_checker($number)
    {
        return $number % 3 == 0;
    }

    public function replacement_string_definition()
    {
        return 'Linio';
    }
}