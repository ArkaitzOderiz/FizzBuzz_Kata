<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function returns_3_for_fizz()
    {
        $fizzbuzz = new FizzBuzz();
        $convertedNumber = $fizzbuzz->convert(3);
        $this->assertEquals('Fizz', $convertedNumber);
    }

}