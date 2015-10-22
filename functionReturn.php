<?php
define("USE_FULL_NAME",FALSE);
$firstName = "Matthew";
$lastName = "Moulds";
$role = "System Administrator";

if( USE_FULL_NAME == TRUE ) {
  $name = $firstName . ' ' . $lastName;
} else {
  $name = $firstName;
}

if($role == "System Administrator"){
  $info = "$role";
} elseif($role == "Student") {
  $info = "$role";
} else {
  $info = "Guest";
}

$socialIcons = array("twitter", "github", "google");
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
      <hr />
      <p><?php echo $info; ?></p>
      <hr />
      <ul class="social">
        <?php
          foreach($socialIcons as $icon) {
        ?>
        <li><a href=""><span class="icon <?php echo $icon; ?>"></span></a></li>
        <?php
      }
        ?>
      </ul>
    </section>
    <section class="main">
      <pre><?php

            function hello($name) {
              if($name == "Matt") {
                return "Hello Matt!";
              } else {
                return "Hello stranger";
              }
            }

            $greeting = hello("Mike");
            echo $greeting;

            echo "\n";

            function addUp($a, $b) {
              $arr = array(
                $a,
                $b,
                $a + $b
              );
              return $arr;
            }

            $value = addUp(2, 4);
            echo $value[2];
            echo "\n";
            print_r($value);

        ?></pre>
    </section>
  </body>
</html>
