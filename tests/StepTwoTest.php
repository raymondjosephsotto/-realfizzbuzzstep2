<?php
/* 
* Run 'vendor/bin/phpunit' on Terminal to conduct tests 
*/

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FizzBuzzTestStepTwo extends TestCase
{
    /**
     * @test
     */
    public function test_if_digit_3_outputs_lucky(): void
    {
        $sut = new FizzBuzzStepTwo;
        $actual = $sut->run();

        $this->assertContains("lucky", $actual);
    }

    /**
     * @test
     */
    public function test_if_multiples_of_3_matches_fizz(): void
    {
        $sut = new FizzBuzzStepTwo;
        $actual = $sut->translate(3);
        $actual = $sut->translate(6);
        $actual = $sut->translate(9);
        $actual = $sut->translate(12);
        $actual = $sut->translate(15);
        $actual = $sut->translate(18);

        $this->assertSame("fizz", $actual);
    }

    /**
     * @test
     */
    public function test_if_multiples_of_5_matches_buzz(): void
    {
        $sut = new FizzBuzzStepTwo;
        $actual = $sut->translate(5);
        $actual = $sut->translate(10);
        $actual = $sut->translate(15);
        $actual = $sut->translate(20);

        $this->assertSame("buzz", $actual);
    }

    /**
     * @test
     */
    public function test_if_multiples_of_15_matches_fizzbuzz(): void
    {
        $sut = new FizzBuzzStepTwo;
        $actual = $sut->translate(15);

        $this->assertSame("fizzbuzz", $actual);
    }

    /**
     * @test
     */
    public function test_if_for_loops_function_is_exactly_up_to_20(): void
    {
        $sut = new FizzBuzzStepTwo;
        $actual = $sut->run();

        $this->assertEquals(20, count($actual));
    }

    public function test_array_sets(): void
    {
        $sut = new FizzBuzzStepTwo;
        $actual = $sut->run();
        $this->assertFalse(array_key_exists(-1, $actual));
        $this->assertTrue(array_key_exists(0, $actual));
        $this->assertTrue(array_key_exists(10, $actual));
        $this->assertFalse(array_key_exists(21, $actual));
    }
}
