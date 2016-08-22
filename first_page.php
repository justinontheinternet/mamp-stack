<!DOCTYPE html>
<html>
<head>
  <title>First Page</title>
</head>
<body>
  <?php $link_name = "Second Page"; ?>
  <?php $id = 2; ?>
  <a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name ?></a>
</body>
</html>