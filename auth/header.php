<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>LES SEMINAIRES DU CLUB</title>
    <link rel="shortcut icon" href="../product/header_logo.png">
    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/bootstrap.min.js"></script>
    <style type="text/css">
        #logo {
            height: 45px;
            width: 120px;
            left: 7px;
            top: 3px;
            position: absolute;
        }
        .file-input-wrapper {
      position: relative;
      overflow: hidden;
      display: inline-block;
    }

    .file-input {
      font-size: 100px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
    }

    .btn-custom {
      border: 2px solid #1ab186;
      color: white;
      background-color: #1ab186;
      padding: 10px 20px;
      cursor: pointer;
    }

    .btn-custom:hover {
      background-color: #17a278;
    }
    </style>
    
</head>

<body style="overflow-x: hidden;">
    <nav class="navbar-default navbar-inverse navbar-fixed-top" style="background-color: black;">
        <img src="../product/header_logo.png" id="logo">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="mainNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index1.php" class="nav-text"> ACCEUIL</a></li>
                    <li><a href="../home.php#about.us" class="nav-text"> SERVICES</a></li>
                    <li><a href="../home.php#contact.us" class="nav-text"> CONTACT</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <font face="century gothic" class="nav-text"> EVENEMENTS&nbsp;&nbsp;</font>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../home.php#seminaire" class="nav-text"> Séminaires</a></li>
                            <li><a href="../home1.php#lancement" class="nav-text"> Lancement de produit</a></li>
                            <li><a href="../home1.php#fete" class="nav-text"> Fête de fin d’année</a></li>
                            <li><a href="../home1.php#Soiree" class="nav-text">Soirée de gala</a></li>
                            <li><a href="../home1.php#anniversaire" class="nav-text"> Anniversaire d'entreprise</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <font face="century gothic" class="nav-text"> COMPTE&nbsp;&nbsp;</font>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="signin_signup.php" class="nav-text"><span class="fa fa-sign-in">
                                        <font face="century gothic">&nbsp;&nbsp;&nbsp;Se connecter </font></a></li>
                            <li><a href="signin_signup.php" class="nav-text"><span class="fa fa-user-plus">
                                        <font face="century gothic">&nbsp;&nbsp;&nbsp;S'inscrire</font></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>