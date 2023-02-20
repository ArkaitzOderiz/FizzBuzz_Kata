<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function convert_fizz_for_multiple_of_3()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(3);

        $this->assertEquals('Fizz', $convertedNumber);
    }

    /**
     * @test
     */
    public function convert_buzz_for_multiple_of_5()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(5);

        $this->assertEquals('Buzz', $convertedNumber);
    }

    /**
     * @test
     */
    public function convert_fizzbuzz_for_multiple_of_15()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(15);

        $this->assertEquals('Buzz', $convertedNumber);
    }

}