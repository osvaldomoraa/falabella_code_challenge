<?php

namespace src\Interfaces;

interface ReplacementRule
{
    public function is_multiple_checker($number);
    public function replacement_string_definition();
}