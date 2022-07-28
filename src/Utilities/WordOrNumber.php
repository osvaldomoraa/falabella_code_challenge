<?php

namespace src\Utilities;

use src\Rules\ITRule;
use src\Rules\LinianosRule;
use src\Rules\LinioRule;

class WordOrNumber
{
    private $rules = [];

    private $start_value = 1;
    private $end_value = 100;

    public function __construct()
    {
        $this->rules[] = new LinianosRule();
        $this->rules[] = new ITRule();
        $this->rules[] = new LinioRule();
    }

    public function replacement_rule_checker($number)
    {
        $result = "$number";
        foreach ($this->rules as $rule) {
            if ($rule->is_multiple_checker($number)) {
                $result = $rule->replacement_string_definition();
                break;
            }
        }
        return $result;
    }

    public function word_or_number_values_generator()
    {
        $results = [];
        for ($i = $this->start_value; $i <= $this->end_value; $i++) {
            $results[] = $this->replacement_rule_checker($i);
        }
        return $results;
    }
}