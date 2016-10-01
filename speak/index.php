<?php include 'valid.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="Resource-type" content="document"/>
    <title>Example</title>
  </head>
  <body>
    <p>Permitted access, Welcome <strong><?php echo $_SESSION['user']; ?></strong></p>
    <br>
    <a href="logoff.php">Get Out -></a>
  </body>
</html>
