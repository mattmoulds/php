<?php
  // This is my firstname
$name = "Matt";
$location = "Orlando, FL";
/*
This is my fullname.
Of British origin
*/
$fullName = "Matt Moulds";
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
          $greeting = "Hello, friends!\n";
          $greeting{0} = "J";
          $secondaryGreeting = "How are you today?";
          //echo $greeting;
          //echo $secondaryGreeting;

          $bool = TRUE;
          //var_dump($bool);
          $bool = FALSE;
          //var_dump($bool);

          var_dump((bool)"abc");
          var_dump((bool)1);
          var_dump((bool)1.0);
          var_dump((bool)-1);

        ?></pre>
    </section>
  </body>
</html>
