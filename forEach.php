<?php
define("USE_FULL_NAME",FALSE);
define("MAX_BADGES", 20);

$firstName = "Matthew";
$lastName = "Moulds";
$location = "Orlando, FL";
$role = "SysAdmin";

if( USE_FULL_NAME == TRUE ) {
  // run this code if USE_FULL_NAME is true
  $name = $firstName . ' ' . $lastName;
} else {
  $name = $firstName;
}

if($role == "SysAdmin"){
  $info = "I'm a $role at Jadu";
} elseif($role == "Student") {
  $info = "I'm a $role at Jadu";
} else {
  $info = "I'm just visiting";
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
        <img src="img/avatar.png" alt="<?php echo $name ?>">
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
      <ul><?php

              for($counter = 0; $counter <= MAX_BADGES; $counter++) {

              }

        ?></ul>
    </section>
  </body>
</html>
