<?php
  include "../database.php";

  if (!$_POST['user']) { $rec_user = ""; } else { $rec_user = addslashes($_POST['user']); }

  if (isset($rec_user)) {
    mysql_select_db($database_bd, $database_conexBD) or die("Could not connect to database.");

    $rec_user = addslashes($_POST['user']);
    $rec_pass = addslashes($_POST['pass']);
    $rec_email = addslashes($_POST['email']);
    $rec_age = addslashes($_POST['age']);
    $rec_first_name = addslashes($_POST['first_name']);
    $rec_last_name = addslashes($_POST['last_name']);

    $insert = "INSERT INTO $database_table_user (id, user, email, pass, age, first_name, last_name) VALUES (NULL, '$rec_user', '$rec_email', '$rec_pass', '$rec_age', '$rec_first_name', '$rec_last_name')";

    if (mysql_query($insert)) {
      header("Location: index.php?mess=ok");
    } else {
      header("Location: index.php?mess=no");
    }
  }
?>