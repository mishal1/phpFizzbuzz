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
    $expected = 'Fizz';
    $actual = $this->fizzbuzz->says(3);
    $this->assertEquals($expected, $actual);
  }

  public function testSaysBuzz(){
    $expected = 'Buzz';
    $actual = $this->fizzbuzz->says(5);
    $this->assertEquals($expected, $actual);
  }

  public function testSaysFizzBuzz(){
    $expected = 'Fizzbuzz';
    $actual = $this->fizzbuzz->says(15);
    $this->assertEquals($expected, $actual);
  }

  public function testSaysNumber(){
    $expected = 1;
    $actual = $this->fizzbuzz->says(1);
    $this->assertEquals($expected, $actual);
  }

}













