<?php
  include "../database.php";
  
  if (!$_POST['user']) { $rec_user = ""; } else { $rec_user = addslashes($_POST['user']); }
  if (!$_POST['pass']) { $rec_pass = ""; } else { $rec_pass = addslashes($_POST['pass']); }

  if (isset($rec_user)) {
    mysql_select_db($database_bd, $database_conexBD) or die("Could not connect to database.");

    $sql = "SELECT * FROM $database_table_user WHERE user = '$rec_user' AND pass = '$rec_pass' LIMIT 1";
    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);
    $count = mysql_num_rows($query);

    if ($count == 0) {
      header("Location: index.php?mess=no_user");
    } else {
      $_SESSION['id'] = $result['id'];
      $_SESSION['user'] = $result['user'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['first_name'] = $result['first_name'];
      $_SESSION['last_name'] = $result['last_name'];
      $_SESSION['age'] = $result['age'];

      header("Location: ../index.php");
    }
  }

?>