<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>LES SEMINAIRES DU CLUB</title>
    <link rel="shortcut icon" href="product/header_logo.png">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body style="overflow-x: hidden;">
    <style type="text/css">
        #logo {
            height: 45px;
            width: 120px;
            left: 7px;
            top: 3px;
            position: absolute;
        }
    </style>
    <nav class=" navbar-default navbar-inverse navbar-fixed-top" style="background-color: black;">
        <img src="product/header_logo.png" id="logo">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse">
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="mainNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../Projet_fin/index1.php" class="nav-text"></span> ACCEUIL</li></a>
                    <li><a href="/Projet_fin/home1.php#about.us" class="nav-text"></span> SERVICES</li></a>
                    <li><a href="/Projet_fin/home1.php#contact.us" class="nav-text"></span> CONTACT</li></a>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <font face="century gothic" class="nav-text"></span> EVENEMENTS&nbsp;&nbsp;</font>
                            <span class="caret "></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/Projet_fin/home1.php#seminaire" class="nav-text"></span> Séminaires</a></li>
                            <li><a href="/Projet_fin/home1.php#lancement" class="nav-text"></span> Lancement de
                                    produit</a></li>
                            <li><a href="/Projet_fin/home1.php#fete" class="nav-text"></span> Fête de fin d’année</a>
                            </li>
                            <li><a href="/Projet_fin/home1.php#Soiree" class="nav-text"></span>Soirée de gala</a></li>
                            <li><a href="/Projet_fin/home1.php#anniversaire" class="nav-text"></span> Anniversaire
                                    d'entreprise</a></li>



                        </ul>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <font face="century gothic" class="nav-text"></span> COMPTE&nbsp;&nbsp;</font>
                            <span class="caret "></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="signin_signup.php" class="nav-text" style="color"><span class="fa fa-sign-in">
                                        <font face="century gothic">&nbsp;&nbsp;&nbsp;Se connecter </font></a></li>
                            <li><a href="signin_signup.php" class="nav-text"><span class="fa fa-user-plus">
                                        <font face="century gothic">&nbsp;&nbsp;&nbsp;S'inscrire</font></a></li>

                        </ul>

                        </font>
            </div>
        </div>
    </nav>
    <img src="images/2.jpg" id="bg">
    <div class="form">

        <ul class="tab-group">
            <li class="tab active"><a href="#login">Mot De passe Oublié</a></li>
        </ul>

        <div class="tab-content">


            <div id="login">
                <h1 style="font-size: 25px">Bienvenue au seminaire du club</h1>

                <form action="updatepassword.php" method="post">

                    <div class="field-wrap">
                        <label>
                            Email
                        </label>
                        <input type="email" name="email" autocomplete="off" />
                    </div>

                    <button class="button button-block">Envoyé</button><br>
                    <center>
                        <font face="Open Source">
                            <p style="font-size:20px; color: #1AB186;">

                            </p>
                        </font>
                    </center>

                </form>

            </div>

        </div>

    </div>

    <script src="js/index.js"></script>

</body>

</html>