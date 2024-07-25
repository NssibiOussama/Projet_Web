<?php
session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location: ../projet_fin/home.php") ;
}
if(($_SESSION['role']=='admin'))
{
	header("location: ../projet_fin/admin.php") ;
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="product/header_logo.png">
    <title> LES SEMINAIRES DU CLUB</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles_clients.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src = "js/jquery.min.js"></script>
  <script src = "js/bootstrap.min.js"></script>
  </head>
  <body>
    <font face="century gothic">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: white">Bienvenue, <?php echo $_SESSION['nom']; ?></a></li>
            <li><a href="../projet_fin/client_logout.php" style="color: white">Déconnexion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><img src="images/user.png" style="width: 50px; height: 50px"> LES SEMINAIRES DU CLUB<small>&nbsp;&nbsp;</small></h1>
          </div>
         
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="../projet_fin/client.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Compte
              </a>
              <a href="../projet_fin/client.php" class="list-group-item" style="background-color: #f4f4f4;"><span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Acceuil</li></a>
               <a href="../projet_fin/client.php" class="list-group-item"><span class="fa fa-credit-card" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Reservation</li></a>
               
               <a href="../projet_fin/ma_compte.php" class="list-group-item"><span class="fa fa-gear" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Rendez-vous</li>
            
              <a href="../projet_fin/client_message.php" class="list-group-item"><span class="fa fa-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Écrire un message</a><br>
             
       
                <a href="../projet_fin/admin.php" class="list-group-item active main-color-bg">
                <span class="fa fa-bed" aria-hidden="true"></span>&nbsp;&nbsp;Tarifs
              </a>
              <div class="well">
          <p>• <b>L’Amphithéâtre</b> - - 2 399.00.</p>
           <p>• <b>L'ATELIER DU CLUB</b> - -2 399.00</p>
           <p>• <b>Le Club des Légendes</b> -1,199.00.</p>
           <p>• <b>Le Carré VIP</b>  -1 , 799.00</p>
            </div>
            </div>


          </div>

          
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h2 class="panel-title fa fa-building ">&nbsp;&nbsp;Les seminaires du club</h3>
              </div>
             <div class="bg-1 jumbotron">
<div class="container">

      <div class="col-md-12 text-center">
        <font face="lato"><h2 class="header1"><b>Bienvenue au seminaires du club</b></h2><br>
        <p class="subheader2">Nous sommes là pour réussir votre événement</p></font>
      </div>

      


      <div class="container jumbotron">
    <div class="row">





      <div class="col-md-3  col-sm-6 col-xs-6">
        <div class="thumbnail text-center " id="thumbnail1">
          <img src="product/amphi1.JPG" class="img-responsive margin ">
         <br>
        <div id="bedroom_info">
        <font face="century gothic">
          <p style="font-size: 12px">L’Amphithéâtre </p>
          <p  style="font-size: 12px">PRIX DE SALLE:2 399.00</p>
          <p  style="font-size: 12px"> 500 personnes</p></font>
        </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="thumbnail text-center " id="thumbnail1">
          <img  src="product/sale_1.jpg" class="img-responsive margin ">
        <p></p>
        <div id="bedroom_info">
        <font face="century gothic">
          <p  style="font-size: 12px">L'ATELIER</p>
          <p style="font-size: 12px">PRIX DE SALLE:2 399.00</p>
          <p style="font-size: 12px"> 500 personnes</p></font>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="thumbnail text-center " id="thumbnail1">
          <img src="product/caree1.JPG" class="img-responsive margin ">
        <p></p>
        <div id="bedroom_info">
        <font face="century gothic" >
          <p style="font-size: 12px">Le Carré VIP </p>
          <p style="font-size: 12px">PRIX DE SALLE:2 399.00</p>
          <p style="font-size: 12px">Une capacité de 80 à 500 personnes</p></font>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="thumbnail text-center " id="thumbnail1">
          <img  src="product/legende1.png" class="img-responsive margin ">
           </font></a>
        <p></p>
        <div id="bedroom_info">
        <font face="century gothic">
          <p style="font-size: 12px">Le Club des Légendes </p>
          <p style="font-size: 12px">Prix de salle: 1,199.00</p>
          <p style="font-size: 12px">Capacité de 10 à 80 personnes</p></font>
          </div>
        </div>
      </div>

    </div>
  </div>  
    </section>

    <footer id="footer" style="height: 72px;">
      <p>© 2020 Les seminaires du club ,  Tous droits réservés </p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
     CKEDITOR.replace( 'editor1' );
 </script>
    <script src="js/bootstrap.min.js"></script>
    </font>
  </body>
</html>
