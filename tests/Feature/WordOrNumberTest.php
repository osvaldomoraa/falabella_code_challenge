<?php
declare(strict_types=1);

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use src\Utilities\WordOrNumber;

final class WordOrNumberTest extends TestCase
{
    public function test_word_or_number_is_multiple_checker()
    {
        $word_or_number = new WordOrNumber();
        $this->assertEquals('Linio', $word_or_number->get_word_or_number(6));
        $this->assertEquals('Linio', $word_or_number->get_word_or_number(9));
        $this->assertEquals('Linio', $word_or_number->get_word_or_number(12));
        $this->assertEquals('IT', $word_or_number->get_word_or_number(10));
        $this->assertEquals('IT', $word_or_number->get_word_or_number(20));
        $this->assertEquals('IT', $word_or_number->get_word_or_number(25));
        $this->assertEquals('Linianos', $word_or_number->get_word_or_number(15));
        $this->assertEquals('Linianos', $word_or_number->get_word_or_number(30));
        $this->assertEquals('Linianos', $word_or_number->get_word_or_number(45));
        $this->assertEquals('7', $word_or_number->get_word_or_number(7));
        $this->assertEquals('14', $word_or_number->get_word_or_number(14));
        $this->assertEquals('19', $word_or_number->get_word_or_number(19));
    }
    
    public function test_word_or_number_replacement_string_definition()
    {
        $word_or_number = new WordOrNumber();
        $expected_array = [1, 2, 'Linio', 4, 'IT', 'Linio', 7, 8, 'Linio', 'IT', 11, 'Linio', 13, 14, 'Linianos', 16, 17, 'Linio', 19, 'IT', 'Linio', 22, 23, 'Linio', 'IT', 26, 'Linio', 28, 29, 'Linianos', 31, 32, 'Linio', 34, 'IT', 'Linio', 37, 38, 'Linio', 'IT', 41, 'Linio', 43, 44, 'Linianos', 46, 47, 'Linio', 49, 'IT', 'Linio', 52, 53, 'Linio', 'IT', 56, 'Linio', 58, 59, 'Linianos', 61, 62, 'Linio', 64, 'IT', 'Linio', 67, 68, 'Linio', 'IT', 71, 'Linio', 73, 74, 'Linianos', 76, 77, 'Linio', 79, 'IT', 'Linio', 82, 83, 'Linio', 'IT', 86, 'Linio', 88, 89, 'Linianos', 91, 92, 'Linio', 94, 'IT', 'Linio', 97, 98, 'Linio', 'IT'];
        $this->assertEquals($expected_array, $word_or_number->replacement_string_definition());
    }
}