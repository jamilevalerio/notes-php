<?php
  echo   '
  <div>
    <p>2.Após a execução desse trecho de código, qual será o valor armazenado em cada variável?</p>
    <p><strong>As variáveis a, b e c receberiam o valor 10, já a d manteria o valor inicial de c (9), exceto se houvesse uma designação por referência ($d = &$c).</strong></p>
  </div>
  ';
$a = 10;
$b = $a;
$c = 9;
$d = $c;
$c = $c + 1;

var_dump($a, $b, $c, $d);
?>
