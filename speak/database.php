<?php
  session_start();

  // Database
  $database_serv = 'localhost:3307'; // Serv MySQL 
  $database_user = 'root'; // User MySQL
  $database_pass = 'usbw'; // Password MySQL
  $database_bd = 'user'; // Database

  // Table user Database
  $database_table_user = 'user';

  // Connection
  $database_conexBD = mysql_connect($database_serv, $database_user, $database_pass) or die("Could not connect to the server.");
  mysql_set_charset('utf8',$database_conexBD);