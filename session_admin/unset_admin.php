<?php
session_start();

unset($_SESSION['role']);
session_destroy();

header("location: ../auth/signin_signup.php");
?>