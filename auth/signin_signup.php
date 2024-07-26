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
              <li><a href="../home.php#lancement" class="nav-text"> Lancement de produit</a></li>
              <li><a href="../home.php#fete" class="nav-text"> Fête de fin d’année</a></li>
              <li><a href="../home.php#Soiree" class="nav-text">Soirée de gala</a></li>
              <li><a href="../home.php#anniversaire" class="nav-text"> Anniversaire d'entreprise</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <font face="century gothic" class="nav-text"> COMPTE&nbsp;&nbsp;</font>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#" class="nav-text"><span class="fa fa-sign-in">
                    <font face="century gothic">&nbsp;&nbsp;&nbsp;Se connecter</font></a></li>
              <li><a href="#" class="nav-text"><span class="fa fa-user-plus">
                    <font face="century gothic">&nbsp;&nbsp;&nbsp;S'inscrire</font></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <img src="../images/2.jpg" id="bg">
  <div class="form">
    <ul class="tab-group">
      <li class="tab active"><a href="#login">se connecter</a></li>
      <li class="tab"><a href="#signup">s'inscrire</a></li>
    </ul>
    <div class="tab-content">
      <div id="login">
        <h1 style="font-size: 25px">Bienvenue au seminaire du club</h1>
        <form action="client_login_db.php" method="post">
          <div class="field-wrap">
            <label>Email</label>
            <input type="email" name="email" autocomplete="off" />
          </div>
          <div class="field-wrap">
            <label>Mot de passe</label>
            <input type="password" name="mdp" autocomplete="off" />
          </div>
          <p class="forgot"><a href="sendEmail.php">Mot de passe oublié?</a></p>
          <button class="button button-block">Connecter</button><br>
          <center>
            <font face="Open Source">
              <p style="font-size:20px; color: #1AB186;"></p>
            </font>
          </center>
        </form>
      </div>
      <div id="signup">
        <h1 style="font-size: 25px">S'inscrire</h1>
        <form action="client_create_db.php" method="post" enctype="multipart/form-data">
          <div class="top-row">
            <div class="field-wrap">
              <label>Nom</label>
              <input type="text" name="nom" required autocomplete="off" />
            </div>
            <div class="field-wrap">
              <label>Email</label>
              <input type="email" name="email" required autocomplete="off" />
            </div>
            <div class="field-wrap">
              <label>Télephone</label>
              <input type="text" name="telephone" required autocomplete="off" />
            </div>
          </div>
          <div class="field-wrap">
            <label>Mot de passe</label>
            <input type="password" name="mdp" required autocomplete="off" />
          </div>
          <div class="field-wrap">
            <input type="file" name="profile_image" accept="image/*" required />
          </div>
          <button type="submit" class="button button-block">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
  <script src="../js/index.js"></script>
  <footer class="container-fluid text-center">
    <div class="col-md-12">
      <font face="century gothic" size="4">
        <p><br>© Tous droits réservés 2024</p>
      </font>
      <div class="social"></div>
    </div>
  </footer>
</body>

</html>