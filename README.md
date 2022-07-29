Linio-IT-Linianos challenge
====================

## Description
 
This is a code challenge to apply to a  Software Engineer position at Lino - Falabella.

    WordOrNumber->word_or_number_values_generator

Is generating the 100 requested using only one if statement. This if statement is on:

    WordOrNumber->replacement_rule_checker
    
Im reaching the expected result using modularized rules and iterating over the rules using a foreach loop. These rules are on src/Rules.

## Setup

After to clone the repository you will need to install the dependencies, run:

    composer install

## Testing

This project is using [PHPUnit](https://phpunit.de/) for testing, there are 8 tests and 34 assertions. Tests can be run with the command:

    vendor\bin\phpunit tests

## Preview

There is a visual output at public/index.html the 100 requested values can be seen there.