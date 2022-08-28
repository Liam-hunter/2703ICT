<?php


include "includes/defs.php";

$number = $_GET['number'];
$fromForm = $_GET['fromForm'];
$error = "";

// check if page is loaded from get request 
// and validate input
if (empty($number) && $fromForm) {
  $error =  "Error: Missing value\n";
} else if (!is_numeric($number) && $fromForm) {
  $error =  "Error: Nonnumeric value: $number\n";
} else if (($number < 2 || $number != strval(intval($number))) && $fromForm) {
  $error =  "Error: Invalid number: $number\n";
} else if ($fromForm) {
  # Set $factors to the array of factors of $number.
  $factors = factors($number);
  if(count($factors)<1){
    $showFactors = false; 
  } else {
    $showFactors = true;
  }
  # Set $factors to a single dot-separated string of numbers in the array.
  $factors = join(" . ", $factors);
  $fileName = "data/factors.txt";

  // the file stuff
  // append those factors to a file
  $fp_factors = fopen($fileName, "a");
  fwrite($fp_factors, "$number = $factors<br>");
  fclose($fp_factors);
  
  // read all factors back into $factors
  $factors = "";
  $fp_factors = fopen("data/factors.txt", "r");
  while(!feof($fp_factors)){
    $line = fgets($fp_factors);
    $factors = $factors . "$line";
  }
  fclose($fp_factors);
}
?>


<!DOCTYPE html>
<!-- Home page for basic factorisation example. -->
<html>

<head>
  <title>Factorisation form</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
  <h1>Factorisation</h1>
  
  <p class="alert">
  <?php
    if (!empty($error)) {
      echo $error;
    };
  ?>
  </p>

  <p><?php if($showFactors) {echo "$factors"; } ?></p>
  <?php 
    if($fromForm) {
      echo "<h2>Another factorisation</h2>";
    }
  ?>

  
  <form method="get" action="index.php">
    <p>Number to factorise: <input type="text" name="number" value="<?= $number ?>">
    <input type="text" style="display: none;" value="true" name="fromForm">
    <p><input type="submit" value="Factorise it!">
  </form>
</body>

</html>