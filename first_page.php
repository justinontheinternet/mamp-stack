<!DOCTYPE html>
<html>
<head>
  <title>First Page</title>
</head>
<body>
  <?php $link_name = "Second Page"; ?>
  <?php 
    $id = 2; 
    $company = "Johnson & Johnson";
  ?>
  <a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company) ?>"><?php echo $link_name ?></a>
  <?php echo $company; ?>
</body>
</html>