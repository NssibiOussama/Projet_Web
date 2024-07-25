<?php
session_start();

if ((!isset($_SESSION['role'])) || (empty($_SESSION['role']))) {
  header("location: ../projet_fin/home.php");
}
if (($_SESSION['role'] == 'client')) {
  header("location: ../proget_fin/client.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Session Admin </title>
  <link rel="shortcut icon" href="image/admin_icon1.png">
  <link href="session_admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="session_admin/css/styles.css" rel="stylesheet">
  <script src="session_admin/js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="session_admin/css/font-awesome.css">
  <script src="session_admin/js/bootstrap.min.js"></script>
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

              <a href="../Projet_fin/admin_page.php" class="list-group-item active main-color-bg"><span
                  class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Dashbord</a>





              <a href="../Projet_fin/admin_page.php" style="background-color: #cacdd4" class="list-group-item"><span
                  class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Page d'acceuil</a>
              <a href="../Projet_fin/Information_client.php" class="list-group-item"><span class="fa fa-user-o"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Clients entrants</a>
              <a href="../Projet_fin/approve_client1.php" class="list-group-item"><span class="fa fa-sign-in"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Client verifié</a>
              <a href="../projet_fin/client_check_out.php" class="list-group-item"><span class="fa fa-sign-out"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp; Client extrait</a>


              <a href="../Projet_fin/messages.php" class="list-group-item"><span class="fa fa-envelope-open-o"
                  aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;boîte de réception</a>
              <a href="../Projet_fin/unset_admin.php" class="list-group-item active main-color-bg"><span
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
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Aperçu du site Web</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #3498db">
                    <h2><span class="fa fa-building" aria-hidden="true"></span>&nbsp;2 399.00</h2>
                    <h4>L’Amphithéâtre</h4>
                    <span></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #9b59b6">
                    <h2><span class="fa fa-building" aria-hidden="true"></span>&nbsp;2 399.00</h2>
                    <h4>L'ATELIER</h4>

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #e74c3c">
                    <h2><span class="fa fa-building" aria-hidden="true"></span> &nbsp;1,199.00</h2>
                    <h4>Légendes</h4>

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #f1c40f">
                    <h2><span class="fa fa-building" aria-hidden="true"></span> &nbsp;1 , 799.00</h2>
                    <h4>Le Carré VIP</h4>

                  </div>
                </div>
              </div>
            </div>


            <?php
            include_once ("connexion/connexion.php");
            $bdd = maConnexion();
            $table = "reservation";
            $cle_primaire = "statut";
            $val_cle_primaire1 = 'Entrante';
            $val_cle_primaire2 = "approved";
            $val_cle_primaire3 = "checkout";
            $sql1 = "SELECT * FROM $table where $cle_primaire= '$val_cle_primaire1' ";
            $reponse_entrante = $bdd->query($sql1) or die($bdd->errorInfo()[2]);
            $sql2 = "SELECT * FROM $table where $cle_primaire= '$val_cle_primaire2'";
            $reponse_approved = $bdd->query($sql2) or die($bdd->errorInfo()[2]);
            $sql3 = "SELECT * FROM $table where $cle_primaire= '$val_cle_primaire3'";
            $reponse_checkout = $bdd->query($sql3) or die($bdd->errorInfo()[2]);
            ?>
            <!-- Latest Users -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">List of all Clients</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Nom</th>
                    <th>Addresse Email</th>
                    <th>Télephone</th>
                    <th>Statut</th>


                  </tr>
                  <?php
                  while ($checkout = $reponse_checkout->fetchobject()) {

                    ?>
                    <tr>
                      <td><?php echo $checkout->nom; ?> </td>
                      <td><?php echo $checkout->email; ?></td>
                      <td><?php echo $checkout->telephone; ?> </td>

                      <td><button class=out title=Fin résérvation></button>
                      <td>




                    </tr>
                    <?php
                  }

                  while ($approved = $reponse_approved->fetchobject()) {
                    ?>
                    <tr>
                      <td><?php echo $approved->nom; ?> </td>
                      <td><?php echo $approved->email; ?></td>
                      <td><?php echo $approved->telephone; ?> </td>

                      <td><button class=approved title=Vérifier></button>
                      <td>

                        <?php
                  }
                  while ($reservation = $reponse_entrante->fetchobject()) {
                    ?>
                    <tr>
                      <td><?php echo $reservation->nom; ?> </td>
                      <td><?php echo $reservation->email; ?></td>
                      <td><?php echo $reservation->telephone; ?> </td>

                      <td><button class=new title=En attente></button>
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