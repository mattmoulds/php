<?php

define("YEAR",2015);
define("JOB_TITLE","Teacher");
define("MAX_BADGES",15000);

// This is my firstname
$name = "Matthew";
$location = "Orlando, FL";
/*
This is my fullname.
Of British origin
*/
$fullName = "Matthew Moulds";
// use fullname as our name
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
          //echo YEAR;
          //echo JOB_TITLE;

          echo "Hello Rebecca";

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
