<?php
include_once '../connexion/connexion.php';
session_start();
$bdd = maConnexion();
$table = 'utilisateurs';
if (isset($_REQUEST["email"]) && !(empty($_REQUEST["email"]))) {
	$login = $bdd->quote($_REQUEST["email"]);

} else {

	$msg = 'ajouter votre email';
	header('Location: signin_signup.php?msg=' . $msg . '');
}
if (isset($_REQUEST["mdp"]) && !(empty($_REQUEST["mdp"]))) {
	$pass = $bdd->quote($_REQUEST["mdp"]);
} else {


	$msg = 'donner votre mot de pass"';
	header('Location: signin_signup.php?msg=' . $msg . '');
}
$req = "select * from $table where email=$login and mdp=MD5($pass)";
$reponse = $bdd->query($req) or die($bdd->errorInfo()[2]);
$nb = $reponse->rowCount();
if ($nb == 0) {

	$msg = 'Compte inexistant"';
	header('Location: signin_signup.php?msg=' . $msg . '');

} else {
	$ligne = $reponse->fetchObject();

	if ($ligne->role == 'admin') {
		$_SESSION['role'] = 'admin';
		$_SESSION['nom'] = $ligne->nom;
		$_SESSION['profile_image'] = $ligne->profile_image;

		header("location: ../session_admin/admin_page.php");
		exit;

	} else {
		$_SESSION['role'] = 'client';
		$_SESSION['nom'] = $ligne->nom;
		$_SESSION['profile_image'] = $ligne->profile_image;

		header("location: ../client/client.php");
		exit;
	}


}
?>