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
<?php
  // These are often form values in $_POST
  $menu_name = "Edit me";
  $position = 4;
  $visible = 1;
  // 2. Perform database query
  $query = "INSERT INTO subjects (";
  $query .= "menu_name, position, visible";
  $query .= ") VALUES (";
  $query .= " '{$menu_name}', {$position}, {$visible}";
  $query .= ")";
  // $result will be either true or false
  $result = mysqli_query($connection, $query);
  // Test if there was query error.
  if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "success!";
  } else {
    // Failure
    // $message = "subject creation failed";
    die("Database query failed. " . mysqli_error($connection)); // mysqli_error finds the most recent error until we make another query
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