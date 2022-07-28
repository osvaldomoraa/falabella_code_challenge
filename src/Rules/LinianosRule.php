<?php

namespace src\Rules;

use src\Interfaces\ReplacementRule;

class LinianosRule implements ReplacementRule
{
    public function number_match_checker($number)
    {
        return $number % 15 == 0;
    }

    public function number_replacer()
    {
        return 'Linianos';
    }
}