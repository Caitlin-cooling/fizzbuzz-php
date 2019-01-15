<?php
  function fizzBuzz() {
    foreach(range(0, 15) as $number) {
      if($number % 15 == 0) {
        echo "FizzBuzz \n";
      } elseif($number % 3 == 0) {
        echo "Fizz \n";
      } elseif($number % 5 == 0) {
        echo "Buzz \n";
      }
      else {
        echo "{$number} \n";
      }
    }
  }
  fizzBuzz();
?>
