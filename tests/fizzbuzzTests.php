<?php

require 'lib/fizzbuzz.php';

class FizzbuzzTest extends PHPUnit_Framework_TestCase{
  
  public function __construct(){
    $this->fizzbuzz = new Fizzbuzz();
  }

  public function testDivisibleByThree(){
    $actual = $this->fizzbuzz->divisibleByThree(3);
    $this->assertTrue($actual);
  }

  public function testNotDivisibleByThree(){
    $actual = $this->fizzbuzz->divisibleByThree(1);
    $this->assertFalse($actual);
  }

  public function testDivisibleByFive(){
    $actual = $this->fizzbuzz->divisibleByFive(5);
    $this->assertTrue($actual);
  }

  public function testNotDivisibleByFive(){
    $actual = $this->fizzbuzz->divisibleByFive(1);
    $this->assertFalse($actual);
  }

  public function testDivisibleByFifteen(){
    $actual = $this->fizzbuzz->divisibleByFifteen(15);
    $this->assertTrue($actual);
  }

  public function testNotDivisibleByFifteen(){
    $actual = $this->fizzbuzz->divisibleByFifteen(1);
    $this->assertFalse($actual);
  }

  public function testSaysFizz(){
    $this->fizzbuzzSaysTest('Fizz', 3);
  }

  public function testSaysBuzz(){
    $this->fizzbuzzSaysTest('Buzz', 5);
  }

  public function testSaysFizzBuzz(){
    $this->fizzbuzzSaysTest('Fizzbuzz', 15);
  }

  public function testSaysNumber(){
    $this->fizzbuzzSaysTest(1, 1);
  }

  private function fizzbuzzSaysTest($expected, $number){
    $actual = $this->fizzbuzz->says($number);
    $this->assertEquals($expected, $actual);
  }

}
