<?php
session_start();
include_once ("../connexion/connexion.php");
$bdd = maConnexion();
$table = "reservation";

$nom = $_SESSION['nom'];
$reservation_id = $_SESSION['reservation_id'];

$email = $_SESSION['email'];
$telephone = $_SESSION['telephone'];
$type_salles = $_SESSION['type_salles'];
$type_event = $_SESSION['type_event'];


$date_debut = $_SESSION['date_debut'];
$date_fin = $_SESSION['date_fin'];
$prix = $_SESSION['prix'];
$sql = "UPDATE $table SET statut= 'approved'  WHERE  email='$email' AND statut = 'Entrante'";
$nblignes = $bdd->exec($sql);
if ($nblignes != 1) {

  $msg = 'Error!';
  header('Location:Information_client.php?msg=' . $msg . '');
} else {

  $msg = 'Succesfull!';
  header('Location:Information_client.php?msg=' . $msg . '');
}

?>