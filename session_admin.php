<?php
session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location: ../projet_fin/home.php") ;
}
if(($_SESSION['role']=='admin'))
{
	header("location: ../projet_fin/admin_page.php") ;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LES SEMINAIRES DU CLUB</title>
      <link rel="shortcut icon" href="product/header_logo.png">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles_clients.css" rel="stylesheet">
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
            <li><a href="client_logout.php" style="color: white">Déconnexion</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><img src="images/user.png" style="width: 50px; height: 50px">LES SEMINAIRES DU CLUB <small>&nbsp;&nbsp;</small></h1>
          </div>
         
        </div>
      </div>
    </header>

   

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="../projet_fin/admin.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Compte
              </a>
              <a href="../projet_fin/client_home.php" class="list-group-item" ><span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Acceuil</li></a>
              <a href="../projet_fin/client.php" class="list-group-item" ><span class="fa fa-credit-card" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Reservation </li></a>
               <a href="../projet_fin/ma_compte.php" class="list-group-item" style="background-color: #f4f4f4;"><span class="fa fa-gear" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Rendez-vous</li></a>
            
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

          
          
            <div class="container-fluid">
              <div class="row">
              <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                
                <form method="POST">
                  <h3 class="panel-title fa fa-check-square-o">&nbsp;&nbsp;Reservation</h3>
				  <?php
include_once("connexion/connexion.php");
$bdd=maConnexion();
$table="reservation";
$cle_primaire = "nom";
$val_cle_primaire = $_SESSION['nom'];

$sql="SELECT * FROM $table where $cle_primaire= '$val_cle_primaire'";
$reponse = $bdd->query($sql) or die ($bdd->errorInfo()[2]);
if($reponse->rowCount()>=0){
?>
</div><br>
               <div class="panel-body">
                  <table class="table table-striped table-hover">
                <tr>
  
      <th>Nom</th>
      <th>Email</th>
      <th>Télephone</th>
      <th>Salles</th>
      <th>Evenement</th>
	    <th>Date debut</th>
		 <th>Date fin</th>
		  <th>Prix</th>
		  <th>Edit</th>
		  <th>Delete</th>




  </tr>

  <?php
  while ($ligne=$reponse->fetchobject())
  {

  	?>
    <tr>
      <td><?php echo  $ligne->nom ; ?> </td>
      <td><?=$ligne->email?></td>
	   <td><?php echo  $ligne->telephone ; ?> </td>
      <td><?=$ligne->type_salles?></td>
      
	   <td><?php echo  $ligne->type_event ; ?> </td>
      <td><?=$ligne->date_debut?></td>
       <td><?php echo  $ligne->date_fin ; ?> </td>
	    <td> <?php echo $ligne->prix; ?> $</td>
       <td><a class="btn btn-primary" href="../projet_fin/client_update.php?reservation_id=<?php echo $ligne->reservation_id; ?>"><i class="fa fa-edit"></i></a> </td>

       <td><a class="btn btn-danger" href="../projet_fin/delete_db.php?reservation_id=<?php echo $ligne->reservation_id;  ?>"><i class="fa fa-trash"></i></a> </td>
                        </tr>
      
      


    
                  
        <?php
                    }
}
                 ?>
                 

                 
                 
                 
                    </table><br><br>
                     <!-- <button type="button" class="btn btn-danger pull-right" style="margin-left: 10px;" data-toggle="modal" data-target="#modal-delete">Delete </button> -->
                     
                     <label style="color: #24303C; margin-left: 400px; margin-top: 8px; font-weight: 1px">
                       <?php 
                        if (isset($_GET['msg'])) 
                            {
                              echo $_GET['msg'];
                            }
                        ?>
                     </label>
                     
                    <!-- <button type="button" class="btn btn-primary pull-right" style="margin-left: 10px;">Update </button></a> -->


                       <!-- <button type="button" class="btn btn-success pull-left fa fa-print" style="padding-left: 60px;padding-right: 60px" data-toggle="modal" data-target="#modal-update"><font face="century gothic">&nbsp;&nbsp;Print</font></button><p style="margin-top: 5px">&nbsp;&nbsp;Note: Please print a copy and bring this document.</p> -->
                    </form><br><br>
                   <div class="container">
                    <form class="form-horizontal" action="delete_db.php" method="POST" >
    <div class="modal fade" id="modal-delete" style="overflow-y: hidden">
      <div class="modal-dialog modal-md"><br><br><br><br>
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title text-center">Message</h2>
          </div>
          <div class="modal-body"><br>
              <div class="form-group input-group ">
                <font size="3"><p style="margin-left: 90px;">Voulez-vous vraiment annuler votre rendez-vous?</p>
                </div></font>
             <div class="modal-footer">
              <button class="btn btn-danger pull-right" id="create" name="delete" data-dismiss="modal">non</button>
                <button class="btn btn-primary pull-right" id="create" name="delete" style="width: 100px; margin-right: 10px;">oui</button>
                

              </div>
            </form>
            
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
    
  </div><br><br><br>
     <footer id="footer" style="height: 86px;">
       <p> © 2020 Les seminaires du club ,  Tous droits réservés</p>
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
    </font>
  </body>
</html>
