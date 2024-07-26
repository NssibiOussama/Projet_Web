<?php
session_start();

if ((!isset($_SESSION['role'])) || (empty($_SESSION['role']))) {
  header("location: ../home.php");
}
if (($_SESSION['role'] == 'client')) {
  header("location: ../client/client.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Session Admin </title>
  <link rel="shortcut icon" href="../image/admin_icon1.png">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <script src="s/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <font face="century gothic">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LES SEMIANIRES DU CLUB</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php echo $_SESSION['nom']; ?>



          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bienvenue&nbsp;<?php echo $_SESSION['nom']; ?></a></li>




          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Page d'acceuil
            <small>&nbsp;&nbsp;Admin</small>
          </h1>
        </div>

      </div>
      </div>
    </header>