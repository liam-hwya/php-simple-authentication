<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=h1, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Login Here</h1>
  <?php

  session_start();

  if(isset($_SESSION['email'])){
    header('location:home.php');
  }

   if(isset($_GET['error'])){
     ?>
     <b><i><?= $_GET['error']; ?></i></b>
     <?php
   }
  ?>
  <form action="login.php" method="POST">
    Email <input type="email" name="email"><br>
    Password <input type="password" name="password"><br>
    <input type="submit" name="login" value="LOGIN">
  </form>
</body>
</html>