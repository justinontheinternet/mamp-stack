<!DOCTYPE html>
<html>
<head>
  <title>Second Page</title>
</head>
<body>
  <a href="first_page.php">First Page</a>

  <pre>
    <?php 
      // print_r($_GET);
      $id = $_GET['id'];
      echo $id;
    ?>

    <?php 
      // print_r($_GET);
      $company = $_GET['company'];
      echo $company;
    ?>
  </pre>
</body>
</html>