<?php
  $error = $_GET['error'];

  if(!empty($error)) {
    if($error == "emptyFields"){
      $error = "<p class=\"alert\">Error: At least one field must contain a value</p>";
    } else if($error == "yearNotNum"){
      $error = "<p class=\"alert\">Error: Year must be a number</p>";
    }
  } 
?>

<!DOCTYPE html>
<!-- Home page of PM database search example. -->
<html>
<head>
  <title>Associative array search example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
  <h2>Australian Prime Ministers</h2>
  <h3>Query</h3>
  <p>In the form: Name, Year, State</p>

  <form method="get" action="results.php">
  <table>
    <?= $error ?>
    <tr><td>Query: </td><td><input type="text" name="query"></td></tr>
    <tr><td colspan=2><input type="submit" value="Search">
                      <input type="reset" value="Reset"></td></tr>
  <table>
  </form>

  <hr>
  <p>
    Source:
    <a href="show.php?file=index.html">index.html</a> 
  </p>
</body>
</html>
