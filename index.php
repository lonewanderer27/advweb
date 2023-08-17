<?php
  $src = "The quick brown Fox Jumps Over The Lazy Dog.-0123456789 ,' ñ Ñ # @ _";

  $name = "Adriane James Jabagat Puzon";
  $adr = "Room 204, 3853 Macabulos St. Bangkal, Makati City";
  $email = "adriane.james.puzon@adamson.edu.ph";

  function rewrite($input, $ucwords = false): string {
    $input_lower = strtolower($input);
    $output = "";

    // loop each letter of the word
    foreach(str_split($input_lower) as $letter) {

      // compare if it has an equivalent in the src_lower
      foreach(str_split(strtolower($GLOBALS["src"])) as $src_letter) {
        if($letter == $src_letter) {
          $output .= $src_letter;
          break;
        }
      }
    }

    if ($ucwords) {
      return ucwords($output);
    } else {
      return $output;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info Strings</title>
</head>
<body>
  <?php
    echo rewrite($name, true);
    echo '<br>';
    echo rewrite($adr, true);
    echo '<br>';
    echo rewrite($email);
  ?>
</body>
</html>