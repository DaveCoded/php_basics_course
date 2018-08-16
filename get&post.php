<?php
  define("TITLE", "GET &amp; POST");

  if( isset( $_POST["form_submit"] ) ) {

    //Build a function that validates the data
    function validateFormData($formData) {
      $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
      return $formData;
    }

    //check to see if inputs are empty
    //create variables with form data
    //wrap the data with our function
    if( !$_POST["name"] ) {
      $nameError = "Please enter your name <br>";
    } else {
      $name = validateFormData($_POST["name"]);
    }

    if( !$_POST["email"] ) {
      $emailError = "Please enter your email <br>";
    } else {
      $email = validateFormData($_POST["email"]);
    }

  }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo TITLE; ?></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

    <div class="container">
      <h1><?php echo TITLE; ?></h1>

      <h4>Submitted via $_GET</h4>
      <form action="form_get.php" method="get">
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Email" name="email">
        <input type="submit" name="form_submit">
      </form>

      <hr>

      <h4>Submitted via $_POST</h4>
      <form action="form_post.php" method="post">
        <input type="text" placeholder="Name" name="post_name">
        <input type="text" placeholder="Email" name="post_email">
        <input type="submit" name="post_submit">
      </form>

      <hr>

      <h4>Submitted to current page</h4>

      <p class="text-danger">* Required fields</p>
      <!-- htmlspecialchars() function removes html chars from form, preventing hackers from using them -->
      <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
        <small class="text-danger">* <?php echo $nameError; ?></small>
        <input type="text" placeholder="Name" name="name">
        <small class="text-danger">* <?php echo $emailError; ?></small>
        <input type="text" placeholder="Email" name="email">
        <input type="submit" name="form_submit">
      </form>

      <?php
        if( isset( $_POST["form_submit"] ) ) {
          echo "<h4>Your info:</h4>";
          echo "$name <br> $email <br>";
        }
      ?>

    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </body>
</html>