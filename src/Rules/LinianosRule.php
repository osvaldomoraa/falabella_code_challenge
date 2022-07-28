<?php

namespace src\Rules;

use src\Interfaces\ReplacementRule;

class LinianosRule implements ReplacementRule
{
    public function is_multiple_checker($number)
    {
        return $number % 15 == 0;
    }

    public function replacement_string_definition()
    {
        return 'Linianos';
    }
}