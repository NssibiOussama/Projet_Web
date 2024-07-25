<?php 
	session_start();

include_once("connexion/connexion.php");
$table='reservation';
$cle_primaire='reservation_id';
$val_cle_primaire=$_REQUEST['edit'];
$nom = $_SESSION['nom'];
$bdd=maConnexion();
if(isset($_REQUEST['nom']))
$nom=$bdd->quote($_REQUEST['nom']);
else die ("<p>saisir le nom</p>");
if(isset($_REQUEST['email']))
$email=$bdd->quote($_REQUEST['email']);
else die ("<p>saisir l' email</p>");
if(isset($_REQUEST['telephone']))
$telephone=$bdd->quote($_REQUEST['telephone']);
else die ("<p>saisir le numero de telephone</p>");
if(isset($_REQUEST['type_salles']))
$type_salles=$bdd->quote($_REQUEST['type_salles']);
else die ("<p>saisir le type de salle</p>");
if(isset($_REQUEST['type_evenet']))
$type_evenet=$bdd->quote($_REQUEST['type_evenet']);
else die ("<p>saisir le type d'événement</p>");
if(isset($_REQUEST['date_debut']))
$date_debut=$bdd->quote($_REQUEST['date_debut']);
else die ("<p>saisir la date de debut de reservation</p>");
if(isset($_REQUEST['date_fin']))
$date_fin=$bdd->quote($_REQUEST['date_fin']);
else die ("<p>saisir le nom</p>");
$sql="UPDATE $table SET
nom= $nom,
email= $email , telephone =$telephone, type_salles=$type_salles, type_evenet=$type_evenet,date_debut=$date_debut,date_fin=$date_fin
WHERE $cle_primaire= $val_cle_primaire";
echo $sql;
$nblignes=$bdd->exec($sql);
if ($nblignes!=1){
die("<p>Impossible d'effectuer la requete de mise à jour!
".$bdd->errorInfo()[2]."</p>");
}else{
	$msg = 'Appointment updated succesfully!';
			header('Location:../projet_fin/ma_compte.php?msg='.$msg.'');
?>
	 		
	<?php
} 
?>