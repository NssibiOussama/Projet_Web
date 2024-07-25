<?php
session_start();

unset($_SESSION['role']) ;
session_destroy();

header("location: ../projet_fin/signin_signup.php") ;
?>