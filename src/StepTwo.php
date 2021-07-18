<?php

/*
* Title: Real FizzBuzz (Step 2)
* Author: Raymond Sotto
* Github: https://github.com/raymondjosephsotto
* PHP version: 7.4.1
* PHP testing version: PHPUnit 9.5.0
*
* Instructions: Enhance your existing FizzBuzz solution to perform the following:
* 1. If the number contains a three you must output the text 'lucky'. 
* This overrides any existing behaviour
*
* Expected Output:
* 1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz
*
* To Run on Command Line: 'php -f src/StepTwo.php'
* To Run on Local Env: 'localhost/realfizzbuzzstep2/src/StepTwo.php' 
* or 'localhost:[YOUR PORT NUMBER HERE]/realfizzbuzzstep2/src/StepTwo.php'
*/


declare(strict_types=1);

class FizzBuzzStepTwo
{

    /*
    * Outputs the number which 
    * contain the variable $digit from 0 to 20 
    * Returns true if $digit exist in number $x 
    */

    public function isDigitThreePresent($x, $digit)
    {
        /* Sets $digit variable to 3 */
        $digit = 3;

        /* Break while loop if $d exist as a digit */
        while ($x > 0) {
            if ($x % 10 == $digit)
                break;

            /* If loop breaks */
            $x = $x / 10;
        }
        return ($x > 0);
    }

    public function translate($num)
    {
        if ($num == 3 || $this->isDigitThreePresent($num, 3)) {
            return "lucky";
        }
        if ($num % 15 == 0) {
            return "fizzbuzz";
        }
        if ($num % 3 == 0) {
            return "fizz";
        }
        if ($num % 5 == 0) {
            return "buzz";
        } {
            return strval($num);
        }
    }

    public function run()
    {
        $result = array();
        for ($i = 0; $i < 20; $i++) {
            $result[$i] = $this->translate($i + 1);
            $concatResult =  $result[$i] . "\n";
            echo $concatResult;
        }
        return $result;
    }
}

$initialize_fizzbuzz_step_two = new FizzBuzzStepTwo();
$output = $initialize_fizzbuzz_step_two->run();