<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
 session_start();

 if(isset($_SESSION['email'])){
   header('location:home.php');
 }
?>
  <h1>Register here</h1>
  <form action="register.php" method="POST">
    Name <input type="text" name="name"><br>
    Email <input type="email" name="email"><br>
    Password <input type="password" name="password"><br>
    <input type="submit" name="register" value="REGISTER">
  </form>
</body>
</html>
