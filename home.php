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

   if(isset($_SESSION['success'])){
     echo $_SESSION['success'];

     echo $_SESSION['email'];
   }else{
     header('location:login_form.php');
   }
  ?>
  This is dashboard page

  <a href="logout.php">Logout</a>
</body>
</html>