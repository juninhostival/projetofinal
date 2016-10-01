<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>New User</title>
  </head>
  <body>
    <h1>New User</h1>
    <form method="post" action="new.php" method="post">
      <div><input type="text" name="first_name" placeholder="First Name" required></div>
      <div><input type="text" name="last_name" placeholder="Last Name" required></div>
      <div><input type="email" name="email" placeholder="Email" required></div>
      <div><input type="text" name="user" autofocus="on" placeholder="Username" required></div>
      <div><input type="password" name="pass" placeholder="Password" required></div>
      <div><input type="number" name="age" placeholder="Age" required></div>
      <div><button type="submit">Save User</button>
    </form>
    <p>After registration, please <a href="../login/">Login</a></p>
  </body>
</html>