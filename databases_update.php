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
  $menu_name = "Delete me";
  $position = 4;
  $visible = 1;
  $id = 6;
  // 2. Perform database query
  $query = "UPDATE subjects SET ";
  $query .= "menu_name = '{$menu_name}', ";
  $query .= "position = {$position}, ";
  $query .= "visible = {$visible} ";
  $query .= "WHERE id = {$id}";
  // $result will be either true or false
  $result = mysqli_query($connection, $query);
  // Test if there was query error.
    // mysqli_affected_rows() ensures the query actually affected the table. here we expect only 1 row to be updated
    // if it fails, it returns -1
    // if you pass values that are the exact same as an existing record, it will return 0
  if ($result && mysqli_affected_rows($connection) == 1) {
    // Success
    // redirect_to("somepage.php");
    echo "success!";
  } else {
    // Failure
    // $message = "subject update failed";
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