<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function convert_fizz_for_mod3()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(3);

        $this->assertEquals('Fizz', $convertedNumber);
    }

    /**
     * @test
     */
    public function convert_buzz_for_mod5()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(5);

        $this->assertEquals('Buzz', $convertedNumber);
    }

    /**
     * @test
     */
    public function convert_fizzbuzz_for_mod15()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(15);

        $this->assertEquals('Buzz', $convertedNumber);
    }

}