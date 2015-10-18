<?php

define("YEAR",2015);
define("JOB_TITLE","Teacher");
define("MAX_BADGES",15000);
define("USE_FULL_NAME",FALSE);
define("MAX_BADGES", 20);

$firstName = "Matthew";
$lastName = "Moulds";
$location = "Orlando, FL";
$role = "System Administrator";

if( USE_FULL_NAME == TRUE ) {
  // run this code if USE_FULL_NAME is true
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
      <p><?php echo $location ?></p>
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
          //echo YEAR;
          //echo JOB_TITLE;

          echo "Deployed via Jenkins";
          echo "\n";

          $eye_colors = array(
              'chris' =>'blue',
              'tom' =>'green',
              'jim' =>'brown');
          print_r($eye_colors);
          $eye_colors['jim'] = 'green';
          $eye_colors['tom'] = 'brown';
          $eye_colors['chuck'] = 'blue';
          print_r($eye_colors);

        ?></pre>
    </section>
  </body>
</html>
