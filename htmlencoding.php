<!DOCTYPE html>
<html>
<head>
  <title>HTML Encoding</title>
</head>
<body>

  <?php 
    $linktext = "<Click> & learn more";
  ?>

  <a href="">
    <?php echo htmlspecialchars($linktext); ?>
  </a>
  <br />
  <?php 
    $text = "¢∆∂∆√";
    echo htmlentities($text);
  ?>
  <br />

  <?php // what to use, when.
    $url_page = "php/created/page/url.php";
    // html does not like < & >
    $param1 = "This is a string with < >";
    // url does not like these characters
    $param2 = "∂¨∆ˆ§∞£ are bad characters";
    // make it safe for url
    $url = "http://localhost/";
    $url .= rawurlencode($url_page);
    $url .= "?" . "param1=" . urlencode($param1);
    $url .= "&" . "param2=" . urlencode($param2);
  ?>
  <!-- $url is not going into html, so must make sure it is safe for that -->
  <a href="<?php echo htmlspecialchars($url); ?>">
    <?php echo htmlspecialchars($linktext); ?>
  </a>

</body>
</html>