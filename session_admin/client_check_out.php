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
  <script src="js/jquery.min.js"></script>
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

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="admin_page.php" class="list-group-item active main-color-bg"><span
                  class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Dashbord</a>
              <a href="admin_page.php" class="list-group-item"><span class="fa fa-home"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Page d'acceuil</a>
              <a href="Information_client.php" class="list-group-item"><span class="fa fa-user-o"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Clients entrants</a>
              <a href="approve_client1.php" class="list-group-item"><span class="fa fa-sign-in"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Client verifié</a>
              <a href="client_check_out.php" class="list-group-item"><span class="fa fa-sign-out"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp; Client extrait</a>


              <a href="messages.php" class="list-group-item"><span class="fa fa-envelope-open-o"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;boîte de réception</a>
              <a href="unset_admin.php" class="list-group-item active main-color-bg"><span
                  class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Déconnexion</a>
            </div>

            <div class="well">
              <h4>Espace disque utilisé</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                  style="width: 60%;">
                  60%
                </div>
              </div>
              <h4>Bande passante utilisée </h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                  style="width: 40%;">
                  40%
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">INFORMATIONS DES CLIENTS</h3>
              </div>
              <div class="panel-body">
                <?php
                if (isset($_POST['msg'])) {
                  echo $_POST['msg'];
                }
                ?>
                <form method="POST">
                  <div class="row">
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="rechercher"
                        placeholder="Search clients information...">
                    </div>
                    <div class="col-md-3">
                      <button class="btn"
                        style="width: 170px; background-color: #00a9f4; color: white">Rechercher</button><br><br>
                    </div>
                  </div>

                  <div class="col-md-4">

                  </div>
                  <table class="table table-striped table-hover">
                    <tr>



                      <?php
                      include_once ("../connexion/connexion.php");
                      $bdd = maConnexion();
                      $table = "reservation";
                      if (isset($_POST['rechercher'])) {
                        $mot = $_POST['rechercher'];
                        if (empty($mot)) {
                          echo "Entrez les informations que vous recherchez";
                          exit;
                        } else

                          $sql = "SELECT * FROM $table where nom LIKE '%$mot%' OR (`type_salles` LIKE '%$mot%')  OR (`type_event` LIKE '%$mot%') AND   `statut` = 'checkout'";
                        $reponse = $bdd->query($sql) or die($bdd->errorInfo()[2]);
                        while ($ligne = $reponse->fetchobject()) {
                          $nom = $ligne->nom;
                          $_SESSION['nom'] = $ligne->nom;

                          $reservation_id = $ligne->reservation_id;
                          $_SESSION['reservation_id'] = $ligne->reservation_id;


                          $email = $ligne->email;
                          $_SESSION['email'] = $ligne->email;
                          ;


                          $telephone = $ligne->telephone;
                          $_SESSION['telephone'] = $ligne->telephone;


                          $type_salles = $ligne->type_salles;
                          $_SESSION['type_salles'] = $ligne->type_salles;


                          $type_event = $ligne->type_event;
                          $_SESSION['type_event'] = $ligne->type_event;


                          $date_debut = $ligne->date_debut;
                          $_SESSION['date_debut'] = $ligne->date_debut;



                          $date_fin = $ligne->date_fin;
                          $_SESSION['date_fin'] = $ligne->date_fin;

                          $prix = $ligne->prix;
                          $_SESSION['prix'] = $ligne->prix;



                          ?>
                          <div class="container">
                            <div class="col-md-12">
                              <div class="row">
                                <?php
                                echo "Search Result : ";
                                ?>
                              </div>
                            </div>
                          </div>
                          <div class="container">
                            <div class="col-md-4">
                              <div class="row">



                                <?php

                                echo "<h3><b>Client's Information</b></h3>" . "<br>";
                                echo "<b>Nom:&nbsp;&nbsp;&nbsp;&nbsp;</b>" . $nom . "<br>";
                                echo "<b>Adresse Email :&nbsp;&nbsp; </b>" . $email . "<br>";
                                echo "<b>Téléphone : </b>" . $telephone . "<br><br><br><br>";
                                ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="row">

                                <?php
                                echo "<h3><b>Reservation Information</b></h3>" . "<br>";
                                echo "<b>Type de salle  : </b>" . $type_salles . "<br>";
                                echo "<b> Type d'evénement :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $type_event . "<br>";
                                echo "<b>Date Début : </b>&nbsp;&nbsp;&nbsp;&nbsp;" . $date_debut . "<br>";
                                echo "<b>Date Fin :  </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $date_fin . " Days" . "<br>";
                                echo "<b>Tarifs : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . "PHP " . $prix . ".00" . "<br><br>";
                                ?>
                              </div>
                            </div>
                          </div>
                          <?php
                        }
                      }
                      ?>
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Information</h3>
                          </div>



                          <?php
                          include_once ("../connexion/connexion.php");
                          $bdd = maConnexion();
                          $table = "reservation";

                          $sql = "SELECT * FROM $table  WHERE `statut` = 'checkout'";
                          $reponse = $bdd->query($sql) or die($bdd->errorInfo()[2]);

                          ?>
                          <table class="table table-striped table-hover">
                            <tr>

                              <th>Nom</th>
                              <th>Type de salles</th>
                              <th>Type d'événement</th>
                              <th>Date début</th>
                              <th>Date fin </th>
                              <th>Prix</th>
                              <th>statut</th>


                            </tr>
                            <?php
                            while ($ligne = $reponse->fetchobject()) {

                              ?>
                              <tr>

                                <td><?= $ligne->nom; ?></td>
                                <td><?php echo $ligne->type_salles; ?> </td>
                                <td><?= $ligne->type_event ?></td>
                                <td><?php echo $ligne->date_debut; ?> </td>
                                <td><?= $ligne->date_fin ?></td>
                                <td><?php echo $ligne->prix; ?> </td>
                                <td><button class="out" title="Fin résérvation"></button>
                                <td>


                                  <?php
                            }

                            ?>
                          </table>






                        </div>
                      </div>
              </div>
            </div>
          </div>
    </section>

    <footer id="footer">
      <p>© 2020 Les seminaires du club , Tous droits réservés</p>
    </footer>
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Add Page</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Page Title</label>
                <input type="text" class="form-control" placeholder="Page Title">
              </div>
              <div class="form-group">
                <label>Page Body</label>
                <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Published
                </label>
              </div>
              <div class="form-group">
                <label>Meta Tags</label>
                <input type="text" class="form-control" placeholder="Add Some Tags...">
              </div>
              <div class="form-group">
                <label>Meta Description</label>
                <input type="text" class="form-control" placeholder="Add Meta Description...">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      CKEDITOR.replace('editor1');
    </script>
  </font>
</body>

</html>