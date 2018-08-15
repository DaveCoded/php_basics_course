<!-- CONSTANTS -->
<?php
  define( "TITLE", "PHP Variables & Constants" );
?>

<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>

    <?php

      //primitive data types
      $booleanVariable = true;

      $name = "Dave";

      $myAge = 27;

      $floatingPoint = 3.1415;

      //print variables to screen
      echo "Hello, my name is $name and I am $myAge years old.<br>";

    ?>

  </body>
</html>