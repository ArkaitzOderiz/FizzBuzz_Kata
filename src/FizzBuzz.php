<?php

namespace Deg540\PHPTestingBoilerplate\Test;

class FizzBuzz
{

    function convert(int $number): string
    {
        if($number % 15 == 0){
            return 'FizzBuzz';
        } elseif($number % 5 == 0){
            return 'Buzz';
        } elseif($number % 3 == 0){
            return 'Fizz';
        }
        return strval($number);
    }
}