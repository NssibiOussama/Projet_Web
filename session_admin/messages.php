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
            <small>&nbsp;&nbsp;Admin</small></h1>
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


              <a href="#" class="list-group-item"><span class="fa fa-envelope-open-o"
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
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">boîte de réception</h3>
              </div>

              <form method="POST">
                <div class="container">
                  <div class="row"><br><br>
                    <div class="col-md-7">
                      <input class="form-control" type="text" name="rechercher" placeholder="Search messages...">
                    </div>
                    <div class="col-md-4">
                      <button class="btn "
                        style="width: 110px; background-color: #ac90dd; color: white;">Rechercher</button><br><br>
                    </div>
                  </div>

                  <div class="col-md-8">
                    <table class="table table-striped table-hover">
                      <tr>




                        <?php
                        include_once ("../connexion/connexion.php");
                        $bdd = maConnexion();
                        $table = "message";
                        if (isset($_POST['rechercher'])) {
                          $mot = $_POST['rechercher'];
                          if (empty($mot)) {
                            echo "Entrez les informations que vous recherchez";
                            exit;
                          } else
                            $sql = "SELECT * FROM $table  WHERE email LIKE '%$mot%'";
                          $reponse = $bdd->query($sql) or die($bdd->errorInfo()[2]);
                          while ($ligne = $reponse->fetchobject()) {







                            $email = $ligne->email;

                            $mess = $ligne->mess;

                            echo "&nbsp;&nbsp;&nbsp;Resultat de recherche : " . "<br>";
                            echo "<th>" . "Email Address" . "<th>";
                            echo "<th>" . "Message" . "<th>";
                            echo "<tr>";

                            echo "<td>" . $email . "<td>";
                            echo "<td>" . $mess . "<td>";

                          }
                        }
                        ?>

                  </div>
                </div>
                </tr>
                </table>





                <?php
                include_once ("../connexion/connexion.php");
                $bdd = maConnexion();
                $table = "message";
                $cle_primaire = "statut";

                $sql = "SELECT * FROM $table";
                $reponse = $bdd->query($sql) or die($bdd->errorInfo()[2]);

                ?>
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                      <h3 class="panel-title">New Messages</h3>
                    </div>

                    <table class="table table-striped table-hover">

                      <tr>
                        <th>Email Address</th>
                        <th>Message</th>

                      </tr>
                      <?php
                      while ($ligne = $reponse->fetchobject()) {


                        echo "<tr>";
                        echo "<td>" . $ligne->email . "</td>";
                        echo "<td>" . $ligne->mess . "</td>";

                        echo "</tr>";


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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>