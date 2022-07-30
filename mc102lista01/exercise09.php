<?php
  $gender = 'M';
  $age = 64;
  $contrib = 10;

  switch ($gender && $age && $contrib) {
    case ($gender == 'M' && $age >= 65 && $contrib >= 10):
      echo 'aposentável';
      break;
    case ($gender == 'M' && $age >= 63 && $contrib >= 15):
      echo 'aposentável';
      break;
    case ($gender == 'F' && $age >= 63 && $contrib >= 10):
      echo 'Aposentável';
      break;
    case ($gender == 'F' && $age >= 61 && $contrib >= 15):
      echo 'Aposentável';
      break;
    default:
      echo 'Não aposentável';
  }
?>
