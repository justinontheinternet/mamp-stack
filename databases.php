<?php
  // 1. Create database connection first.
  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "widgetpassword";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occured
  if (mysqli_connect_errno()) {
    die( "Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Databases</title>
</head>
<body>

</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>