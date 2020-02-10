<?php

require 'connectdb.php';

session_start();

  if(isset($_SESSION['email'])){
    header('location:home.php');
  }

 if(isset($_POST['login'])){
   $email = $_POST['email'];
   $password = md5($_POST['password']);

  $statement = $conn->prepare('select * from fashion_users where email=:email and password=:password');


  $result = $statement->execute(['email'=>$email,'password'=>$password]);

  $row = $statement->fetch();

  if(!$row){


    header('location:login_form.php?error=credential is not correct');
  }else{

    $_SESSION['email'] = $email;
    $_SESSION['success']="You are logged in. Welcome back.";
    header('location:home.php');
  }
 }
?>