<?php
include_once 'connexion/connexion.php';
$bdd=maConnexion() ;
$table="utilisateurs" ;
if (isset($_REQUEST['email']) and (!empty($_REQUEST['email'])))

	$email=$bdd->quote($_REQUEST['email']) ;

else die ( "<p> Entrée votre email</p>") ;

if (isset($_REQUEST['mdp']) and (!empty($_REQUEST['mdp'])))

	$mdp=$bdd->quote($_REQUEST['mdp']) ;

else die ( "<p> Entrée votre mdp</p>") ;

if (isset($_REQUEST['nom']))

	$nom=$bdd->quote($_REQUEST['nom']) ;

else die ( "<p> Entrée votre nom</p>") ;

if (isset($_REQUEST['telephone']))
{

	$telephone=$_REQUEST['telephone'] ;
settype($telephone, "integer") ;
}

else die ( "<p> Entrée votre telephone </p>") ;
 

 $sql = "INSERT INTO $table (id,nom,email,mdp,telephone,role)
                        VALUES(NULL,$nom,$email ,MD5($mdp),$telephone,'client')";

//$sql="INSERT INTO $table VALUES (NULL , $nom ,$email ,MD5( $mdp) ,$telephone , role="client")";
$nb=$bdd->exec($sql) ;
if($nb!=1)
die("<p> Impossible d'effectuer la requete!".$bdd->errorInfo()[2]."</p>") ;
else{
	header('location: /Projet_fin/signin_signup.php') ;
	?><p>Enregistrement ajoute</p><br>
	<?php echo "L'identifiant du client est : " .$bdd->lastInsertId() ;
}
?>




