<?php
$name = "Matthew";
$location = "Orlando, FL";
$fullName = "Matthew Moulds";
$name = $fullName;
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?> | Treehouse Profile</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/git.png" alt="<?php echo $name ?>">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <hr />
      <ul class="social">
        <li><a href=""><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <pre><?php
              $a = 10;
              $b = 10;
              $c = 20;
              $d = "10";

              echo "Equals\n";
              echo "$a == $b -- ";
              var_dump($a == $b); // equal (true)
              echo "$a == $c -- ";
              var_dump($a == $c); // equal (false)

              echo "\n";

              echo "Identicle\n";
              echo "$a === $b -- ";
              var_dump($a === $b); // identicle (true)
              echo "$a === $d -- ";
              var_dump($a === $d); // identicle (false)

              echo "\n";
              echo "Not Equal\n";
              echo "$a != $b -- ";
              var_dump($a != $b); // not equal to (false)
              echo "$a != $c -- ";
              var_dump($a != $c); // not equal to (true)

              echo "\n";

              echo "Not identicle\n";
              echo "$a !== $d -- ";
              var_dump($a !== $d); // not identicle (true)
              echo "$a !== $b -- ";
              var_dump($a !== $b); // not identicle (false)

              echo "\n";

              echo "Less than\n";
              echo "$a < $b -- ";
              var_dump($a < $b); //less than (false)
              echo "$a < $c -- ";
              var_dump($a < $c); // less than (true)

              echo "\n";
              echo "Greater than\n";
              echo "$a > $b -- ";
              var_dump($a > $b); // greater than (false)
              echo "$c > $a -- ";
              var_dump($c > $a); // grater than (true)

              echo "\n";
              echo "Less than or equal to\n";
              echo "$a <= $b -- ";
              var_dump($a <= $b); // greater than (true)
              echo "$a <= $c -- ";
              var_dump($a <= $c); // grater than (true)

              echo "\n";
              echo "Greater than or equal to\n";
              echo "$a >= $b -- ";
              var_dump($a <= $b); // greater than (true)
              echo "$c >= $a -- ";
              var_dump($c >= $a); // grater than (true)

        ?></pre>
    </section>
  </body>
</html>
