<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP COURSE</title>
</head>
<body>

  <h1>PHP syntax</h1>
  <!-- commands without abreviation must be finished with semicolon( ; ) -->
  <?php
  echo "<p>Hello world!</p>";
  ?>

  <!-- command {php-echo} with abreviation (short-circuit)  -->

  <?=
  "<p>Hello world!</p>"
  ?>

  <h2>Output commands</h2>

  <?php
  // output commands on PHP
  echo "<p>echo</p>";

  $data = date('d/m/Y');
  // In PhP you concatenate with dot ( . )

  echo "A data de hoje é {$data}", "<br>","A data de hoje é " . $data . "<br><br>";

  // Using single quotations ('') interpretates everything as a string. The variables on strings should be added with curly brackets ( {} ), also equal to React.

  print "print";
  //Not able to use colons
  ?>
  <h2>Variables</h2>

  <?php
    echo '<p>Theres no inflexible rule about naming the variables, just focus on using just one type of pattern on the entire project, ex: CamelCase, lowerCamelCase. Note: PHP is case sensitive so a variable with uppercase letters is different from one with lowercase.</p>

     <div>
    <h2>Reserved Variables</h2>
    <ul>
      <li>$_COOKIE: made to acess the cookies of the sistem</li>
      <li>$_FILES: has the info of files sent by webform submissions</li>
      <li>$_GET/ $_POST: also acess the info of webform submissions</li>
      <li>$_SERVER: has information about the server</li>
      <li>$_GLOBALS: Has the info about almost all the others global variables</li>
    </ul>
  </div>
  <div>
    <h2>Data Types</h2>
    <ul>
      <li><strong>String</strong>:pratically text, written with quotes.(<string>)</li>
      <li><strong>Integer</strong>: The whole number with no decimals</li>
      <li><strong>Float/ double</strong>: Known in Portuguese as <número real>, with decimals. In PHP written with dot { . }</li>
      <li><strong>Boolean</strong>: true or false</li>
      <li><strong>Objects</strong></li>
      <li><strong>Arrays</strong>: a variable that can keep more than one data</li>
    </ul>
  <div>
  </div>
    <h3>An array example:</h3>
    $array = ["whatsup", 23, 1.8, false, new stdClass(), array()]
  </div>';

  $array = ["whatsup", 23, 1.8, false, new stdClass(), array()];
  var_dump($array);

  echo '
    <div>
      <h2>Check and conversion of data</h2>
      <h3>check datatype</h3>
      <p>using the function (is_datatype(data/variable)) validates the type of data used returning a true/false answer.</p>
      $php = php
    </div>
    <div>
    <h3>Converting datatype</h3>
    <p>using the function (settype(data/variable, type)) converts the type of data used.</p>
    $php = php;
    settype($php, int);
  </div>
  ';
  $php = 'php';
  var_dump(is_string(value:$php));
  //var_dump(settype(mixed &$php, "integer"));

  echo '
  <div>
    <h2>Assignment operators</h2>
    <p>atribuição: $a = 7</p>
    <p>soma: $a += 7</p>
    <p>multiplicação: $a *= 7</p>
    <p>divisão: $a /= 7</p>
    <p>concatenação: $a .= 7 (note in this case the value will become a string)</p>
  </div>
  ';
  ?>

  <div>
    <p>other notes</p>
    <a href="/php-course/conditionals.php">Conditionals</a>
  </div>
  <a href="./mc102lista01/">lista 01</a>
  <a href="./mc102lista02/">lista 02</a>


</body>
</html>
