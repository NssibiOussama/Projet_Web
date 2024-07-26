<?php
session_start();

if ((!isset($_SESSION['role'])) || (empty($_SESSION['role']))) {
  header("location: ../projet_fin/home.php");
}
if (($_SESSION['role'] == 'admin')) {
  header("location: ../proget_fin/admin_page.php");
}
?>

<?php

if (isset($_REQUEST['reservation_id'])) {
  include_once ("../connexion/connexion.php");
  $table = 'reservation';
  $cle_primaire = 'reservation_id';
  $val_cle_primaire = $_REQUEST['reservation_id'];
  $nom = $_SESSION['nom'];
  $bdd = maConnexion();
  $sql = "SELECT * FROM $table where
$cle_primaire= $val_cle_primaire AND nom='$nom'";
  $reponse = $bdd->query($sql) or die($bdd->errorInfo()[2]);
  if ($reponse->rowCount() == 1) {
    $ligne = $reponse->fetchObject();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="../product/header_logo.png">
      <title> LES SEMINAIRES DU CLUB</title>
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/styles_clients.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
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
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" style="color: white">Bienvenue, <?php echo $_SESSION['nom']; ?></a></li>
                <li><a href="../auth/client_logout.php" style="color: white">Déconnexion</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <header id="header">
          <div class="container">
            <div class="row">
              <div class="col-md-10">
                <h1><img src="../images/user.png" style="width: 50px; height: 50px"> Les seminaires du club
                  <small>&nbsp;&nbsp;</small>
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
                  <a href="#" class="list-group-item active main-color-bg">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Compte
                  </a>
                  <a href="client_home.php" class="list-group-item"><span class="fa fa-home"
                      aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;ACCEUIL</li></a>
                  <a href="client.php" class="list-group-item" style="background-color: #f4f4f4;"><span
                      class="fa fa-credit-card" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Reservation</li></a>

                  <a href="ma_compte.php" class="list-group-item"><span class="fa fa-gear"
                      aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Rendez-vous</li>


                    <a href="client_message.php" class="list-group-item"><span class="fa fa-pencil"
                        aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Écrire un message</a><br>


                    <a href="#" class="list-group-item active main-color-bg">
                      <span class="fa fa-bed" aria-hidden="true"></span>&nbsp;&nbsp;Tarifs
                    </a>
                    <div class="well">
                      <p>• <b>L’Amphithéâtre</b> - 2 399.00.</p>
                      <p>• <b>L'ATELIER DU CLUB</b> -2 399.00</p>
                      <p>• <b>Le Club des Légendes</b> -1,199.00</p>
                      <p>• <b>Le Carré VIP</b> -1 , 799.00</p>
                    </div>
                </div>


              </div>


              <div class="col-md-9">
                <!-- Website Overview -->
                <div class="panel panel-default">
                  <div class="panel-heading main-color-bg">
                    <h2 class="panel-title fa fa-calendar">&nbsp;&nbsp;Reservation </h3>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-6 "><br>
                        <div class="panel panel-success">
                          <div class="panel-heading">

                            INFORMATION PERSONNELLES
                          </div>
                          <div class="panel-body">
                            <form name="form" action="reservation_update_db.php" method="post">
                              <font face="century gothic">
                                <div class="form-group">
                                  <label>NOM</label>
                                  <input name="nom" class="form-control" value="<?= $ligne->nom; ?>" required>
                                </div>
                                <div class="form-group">
                                  <label>ID</label>
                                  <input name="reservation_id" type="text" class="form-control"
                                    value="<?= $ligne->reservation_id; ?>" readonly required>
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input name="email" type="text" class="form-control" value="<?= $ligne->email; ?>"
                                    required>
                                </div>
                                <div class="form-group">
                                  <label>TELEPHONE</label>
                                  <input name="telephone" type="text" class="form-control" value="<?= $ligne->telephone; ?>"
                                    required>
                                </div>


                          </div>

                        </div>

                      </div>

                      <div class="col-md-4"><br>
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            INFORMATION DE RESERVATION
                          </div>
                          <div class="panel-body">

                            <div class="form-group">
                              <label>SALLE</label>




                              <?php

                              include_once '../connexion/connexion.php';

                              $bdd = maConnexion();
                              $query = "SELECT  Type FROM salles_category ORDER BY id ";

                              $result = $bdd->query($query) or die($bdd->errorInfo()[2]);
                              echo "<select name='type_salles' class='form-control' required>";
                              echo "<option value='" . $ligne->type_salles . "'>" . $ligne->type_salles . "</option>";

                              while ($cat = $result->fetchObject())
                                echo "<option value='" . $cat->Type . "'>" . $cat->Type . "</option>";
                              echo "</select>";
                              ?>

                            </div>
                            <div class="form-group">
                              <label>EVENEMENT</label>




                              <?php
                              include_once '../connexion/connexion.php';

                              $bdd = maConnexion();
                              $query = "SELECT  type FROM evénements ORDER BY id ";
                              $result = $bdd->query($query) or die($bdd->errorInfo()[2]);
                              echo "<select name='type_event' class='form-control' required>";
                              echo "<option value='" . $ligne->type_event . "'>" . $ligne->type_event . "</option>";
                              while ($cat = $result->fetchObject())
                                echo "<option value='" . $cat->type . "'>" . $cat->type . "</option>";
                              echo "</select>";
                              ?>


                            </div>
                            <div class="form-group">
                              <label>DATE DEBUT</label>
                              <input name="date_debut" type="date" class="form-control" placeholder="yyyy-mm-dd"
                                value="<?= $ligne->date_debut; ?>" required="">
                            </div>
                            <div class="form-group">
                              <label>DATE FIN</label>
                              <input name="date_fin" type="date" class="form-control" placeholder="yyyy-mm-dd"
                                value="<?= $ligne->date_fin; ?>" required=""><br><br>
                              <div class="form-group pull-left">
                                <label style="color: #24303C ; margin-top: 7px; margin-left: 30px">
                                  <?php
                                  if (isset($_GET['msg'])) {
                                    echo $_GET['msg'];
                                  }
                                  ?>
                                </label>
                              </div>
                              <div class="form-group pull-right">

                                <button class="btn btn-primary" name="done">Submit</button>

                                <a href="ma_compte.php"><button type="button" class="btn btn-danger">Cancel</button> </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <?php
  }
}
?>

    <footer id="footer" style="height: 72px;">
      <p> © 2020 Les seminaires du club , Tous droits réservés</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
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
    <script src="js/bootstrap.min.js"></script>
  </font>
</body>

</html>