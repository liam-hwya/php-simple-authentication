<?php

session_start();

  if(isset($_SESSION['email'])){
    header('location:home.php');
  }

require 'connectdb.php';

 if(isset($_POST['register'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);

  $statement = $conn->prepare('insert into fashion_users (name,email,password) values (:name,:email,:password)');


  $result = $statement->execute(['name'=>$name,'email'=>$email,'password'=>$password]);

  if($result){

    $_SESSION['email'] = $email;
    $_SESSION['success']="You are logged in. Welcome back.";

    header('location:home.php');
  }else{
    header('location:register_form.php');
  }
 }
?>