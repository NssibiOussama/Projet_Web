<?php
include_once ("../connexion/connexion.php");
$table = 'reservation';
$cle_primaire = 'reservation_id';
$val_cle_primaire = $_REQUEST['reservation_id'];
$bdd = maConnexion();
$sql = "DELETE FROM $table WHERE
$cle_primaire=$val_cle_primaire";
$nblignes = $bdd->exec($sql) or die($bdd->errorInfo()[2]);
if ($nblignes != 1)
    die("<p>Impossible d'effectuer la requete de suppression! </p>");
else
    $msg = 'Suppression effectuée avec succès';
header('Location: client.php?msg=' . $msg . '');
?>