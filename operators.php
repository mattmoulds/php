<?php
$name = "Matthew ";
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

              $sum = $a + $b;
              $diff = $a - $b;
              $product = $a * $b;
              $quotient = $a / $b;

              $product++;
              $product--;

        ?></pre>
        <ul>
          <li><?php echo $sum; ?></li>
          <li><?php echo $diff; ?></li>
          <li><?php echo $product; ?></li>
          <li><?php echo $quotient; ?></li>
        </ul>
    </section>
  </body>
</html>
