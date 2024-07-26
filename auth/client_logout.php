<?php
session_start();

unset($_SESSION['role']);
session_destroy();

header("location: signin_signup.php");
?>