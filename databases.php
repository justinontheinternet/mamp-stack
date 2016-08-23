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
  // 2. Perform database query
    // assemble query like below for readability and to incorporate conditionals
    // make sure there is a space at the end of each string
  $query = "SELECT * ";
  $query .= "FROM subjects ";
  $query .= "WHERE visible = 1 ";
  $query .= "ORDER BY position ASC";
  // $result is a 'resource': a collection of db rows
  $result = mysqli_query($connection, $query);
  // Test if there was query error. Empty result is not the same as no result.
  if (!$result) {
    die("Database query failed.");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Databases</title>
</head>
<body>
  <ul>
    <?php
      // 3. Use return data (if any)
        // fetching subject increments array pointer for us
        // can't use foreach() because $result is not a php object, it is a mysql result set
        // saying "while you can still assign something to $subject, dump $subject, otherwise exit"
          // mysqli_fetch_array($result, MYSQL_ASSOC) does same as below
      while ($subject = mysqli_fetch_assoc($result)) {
        // output data from each subject
    ?>
    <li><?php echo $subject['menu_name'] . " (" . $subject['id'] . ")"; ?></li>
        
    <?php
      }
    ?>
  </ul>
  <?php
    // 4. Release returned data to free memory
    mysqli_free_result($result);
  ?>

</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>