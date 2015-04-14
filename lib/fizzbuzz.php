<?php

class Fizzbuzz{

  public function divisibleByThree($number){
    return $this->divisibleBy(3, $number);
  }

  public function divisibleByFive($number){
    return $this->divisibleBy(5, $number);
  }

  public function divisibleByFifteen($number){
    return $this->divisibleBy(15, $number);
  }

  public function divisibleBy($divisor, $number){
    return $number % $divisor == 0;
  }

  public function says($number){
    if($this->divisibleByFifteen($number)) return 'Fizzbuzz';
    if($this->divisibleByFive($number)) return 'Buzz';
    if($this->divisibleByThree($number)) return 'Fizz';
    return $number;
  }

}