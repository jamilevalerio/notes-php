<?php 
  $number1 = 4;
  $number2 = 5;
  $operator = 'division';
  $result = 0;
  
  switch($operator) {
    case ($operator == 'addition'):
      $result = $number1 + $number2;
      var_dump($result);
      break;
    case ($operator == 'subtraction'):
      $result = $number1 - $number2;
      var_dump($result);
      break;
    case ($operator == 'multiplication'):
      $result = $number1 * $number2;
      var_dump($result);
      break;
    case ($operator == 'division'):
      $result = $number1 / $number2;
      var_dump($result);
      break;
  } 
?>
