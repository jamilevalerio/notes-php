<?php
  $a = 5;
  $b = 5;
  $c = 5;
  $s = ($a + $b + $c) /2;
  $area = sqrt($s*($s - $a)*($s - $b)*($s - $c));
  if ($a == $b && $a == $c ) {
    print "this triangle is equilateral!<br/>";
  }
  elseif ($a != $b && $a != $c  && $b != $c) {
    print "this triangle is scalene!<br/>";
  }
  else {
    print "this triangle is isosceles!<br/>";
  }

  echo "the area of the triangle is $area"
  
?>
