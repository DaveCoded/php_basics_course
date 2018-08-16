<?php
  function checkForClickbait() {
    //grab value from textarea in $_POST collection
    //make all letters lowercase using strtolower() function
    //store in a variable
    $clickbait = strtolower($_POST["clickbait_headline"]);

    //store array of clickbait-sounding words
    $a = array(
      "scientiests",
      "doctors",
      "hate",
      "stupid",
      "weird",
      "simple",
      "trick",
      "shocked me",
      "you'll never believe",
      "hack",
      "epic",
      "unbelievable"
    );

    //store array of replacements in respective order
    $b = array(
      "so-called scientists",
      "quacks",
      "aren't threatened by",
      "average",
      "completely normal",
      "ineffective",
      "method",
      "is no different than the others",
      "you won't really be surprised by",
      "slightly improve",
      "boring",
      "normal"
    );

    //use the str_replace() function to replace the words
    //uppercase first letter using ucwords() function
    //store in a variable
    $honestHeadline = str_replace( $a, $b, $clickbait ); //arguments for str_replace( what to replace, what to replace it with, where to replace them )
  
    //return array of variables in order to access globally
    return array($clickbait, $honestHeadline);
  }

  function displayHonestHeadline( $x, $y ) {
    //echo original headline on screen
    echo "<strong class='text-danger'>Original Heading</strong><h4>".ucwords($x)."</h4><hr>";
    //echo new, honest headline
    echo "<strong class='text-danger'>Original Heading</strong><h4>".ucwords($y)."</h4>";
  }
?>