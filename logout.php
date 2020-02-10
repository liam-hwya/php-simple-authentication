<?php
 session_start();

session_destroy();

unset($_SESSION['email']);
unset($_SESSION['success']);

header('location:login_form.php');
?>