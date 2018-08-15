<?php
  define("TITLE", "PHP Arrays");
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <h1><?php echo TITLE; ?></h1>

      <?php
      //PLAIN VARIABLES
        $username = "johndoe";
        $fullName = "John Doe";
        $age = 32;
        $gender = "male";
        $country = "Mexico";

      //SIMPLE ARRAY
        $user   = array(
                  "johndoe",    //0
                  "John Doe",   //1
                  32,           //2
                  "male",       //3
                  "Mexico"      //4
        );

      //ECHO VALUES OF ARRAYS
        echo $user[0] ."<br>";
        echo $user[1] ."<br>";
        echo $user[2] ."<br>";
        echo $user[3] ."<br>";
        echo $user[4] ."<br>";

      //ASSOCIATIVE ARRAYS
        $people = array(
                    "username" => "johndoe",
                    "fullName" => "John Doe",
                    "age"      => 32,
                    "gender"   => "male",
                    "country"  => "Mexico"
        );

      ?>
      
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>