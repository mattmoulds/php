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
        <img src="img/avatar.png" alt="<?php echo $name ?>">
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
              $a = TRUE;
              $b = TRUE;

              echo "And\n";
              echo "$a and $b ";
              var_dump($a && $b); // a and b are true (true)

              $b = FALSE;
              echo "\n";

              echo "And\n";
              echo "$a and $b ";
              var_dump($a && $b); // a and b are true (false)

              echo "\n";

              echo "Or\n";
              var_dump( $a || $b); // a or b are true (true)

              echo "\n";

              echo "Not\n";
              var_dump(! $a); // a is not true (false)

              echo "\n";

              echo "Not\n";
              $a = FALSE;
              var_dump(! $a); // as is not true (true)



        ?></pre>
    </section>
  </body>
</html>
