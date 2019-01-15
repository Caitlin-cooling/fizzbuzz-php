<?php
  function fizzBuzz() {
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    for($x = 0; $x < count($numbers); $x++) {
      if($numbers[$x] % 3 == 0) {
        echo "Fizz \n";
      } elseif($numbers[$x] % 5 == 0) {
        echo "Buzz \n";
      }
      else {
        echo "{$numbers[$x]} \n";
      }
    }
  }
  fizzBuzz();
?>
