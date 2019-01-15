<?php
  function fizzBuzz() {
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    for($x = 0; $x < count($numbers); $x++) {
      echo "{$numbers[$x]} \n";
    }
  }
  fizzBuzz();
?>
