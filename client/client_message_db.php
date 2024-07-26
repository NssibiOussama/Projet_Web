<?php
include_once '../connexion/connexion.php';
$bdd = maConnexion();
$table = "message";
if (isset($_REQUEST['email']) and (!empty($_REQUEST['email'])))

	$email = $bdd->quote($_REQUEST['email']);
else
	die("<p> Entrée votre email</p>");

if (isset($_REQUEST['mess']) and (!empty($_REQUEST['mess'])))

	$mess = $bdd->quote($_REQUEST['mess']);
else
	die("<p> Entrée votre message</p>");


$sql = "INSERT INTO $table (email,mess)
                        VALUES($email,$mess)";


$nb = $bdd->exec($sql);
if ($nb != 1)
	die("<p> Impossible d'effectuer la requete!" . $bdd->errorInfo()[2] . "</p>");
else {

	$msg = "Message has been sent!!";
	header('location: client_message.php?msg=' . $msg . '');

}
?>