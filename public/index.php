<?php

require_once '../vendor/autoload.php';

use src\Utilities\WordOrNumber;

$word_or_number = new WordOrNumber();
$array_of_values = $word_or_number->word_or_number_values_generator();
$final_output = implode(', ', $array_of_values);
echo $final_output;