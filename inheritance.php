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

            Class Product {
              public $name = 'default_name';
              public $price = 0;
              public $desc = 'default description';

              function __construct($name, $price, $desc) {
                $this->name = $name;
                $this->price = $price;
                $this->desc = $desc;
              }

              public function getInfo() {
                return "Product Name: ". $this->name . "\nProduct Price: ". $this->price . "\nProduct Description: ". $this->desc;
              }
            }

            class Soda extends Product {
              public $flavor;

              function __construct($name, $price, $desc, $flavor) {
                  parent::__construct($name, $price, $desc);
                  $this->flavor = $flavor;
              }

              public function getInfo() {
                return "\n\nProduct Name: ". $this->name . "\nFlavor: ". $this->flavor;
              }
            }

            $shirt = new Product("Blue Shirt",30,"Nice cotton shirt");
            $soda = new Soda("Space Juice", 2, "Thirst Mutilator","Grape");
            echo $shirt->getInfo();
            echo $soda->getInfo();

        ?></pre>
    </section>
  </body>
</html>
