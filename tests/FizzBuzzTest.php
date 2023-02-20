<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzbuzz;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function convert_fizz_for_multiple_of_3()
    {
        $convertedNumber = $this->fizzbuzz->convert(3);

        $this->assertEquals('Fizz', $convertedNumber);
    }

    /**
     * @test
     */
    public function convert_buzz_for_multiple_of_5()
    {
        $convertedNumber = $this->fizzbuzz->convert(5);

        $this->assertEquals('Buzz', $convertedNumber);
    }

    /**
     * @test
     */
    public function convert_fizzbuzz_for_multiple_of_15()
    {
        $convertedNumber = $this->fizzbuzz->convert(15);

        $this->assertEquals('Buzz', $convertedNumber);
    }

}