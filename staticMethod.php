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

          Class Product
          {

            public static $manufacturer = "Bart Taylor";
            public $name = "default_name";
            public $price = 0;
            public $desc = "default description";

            function __construct($name, $price, $desc) {
              $this->name = $name;
              $this->price = $price;
              $this->desc = $desc;
            }

            public function getInfo() {
              return "Product Name: ". $this->name;
            }

            public function getMaker() {
              return self::$manufacturer;
            }
          }

          Class Soda extends Product
          {

            public $flavor;

            function __construct($name, $price, $desc, $flavor) {
              parent::__construct($name, $price, $desc);
              $this->flavor = $flavor;
            }

            public function getInfo() {
              return "Product Name: ". $this->name . "\nFlavor: ". $this->flavor;
            }

          }

          $shirt = new Product("Space shirt",20,"Nice blue shirt");
          $soda = new Soda("Space soda",2,"Thirst Killer","Apple");

          echo $shirt->getMaker();
          echo "\n";
          echo $shirt::$manufacturer;

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
