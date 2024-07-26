<?php
include_once '../connexion/connexion.php';
$bdd=maConnexion() ;
$table="reservation" ;
if (isset($_REQUEST['email']) and (!empty($_REQUEST['email'])))

	$email=$bdd->quote($_REQUEST['email']) ;

else die ( "<p> Entrée votre email</p>") ;

if (isset($_REQUEST['telephone']) and (!empty($_REQUEST['telephone'])))

	$telephone=$bdd->quote($_REQUEST['telephone']) ;

else die ( "<p> Entrée votre telephone</p>") ;

if (isset($_REQUEST['nom']))

	$nom=$bdd->quote($_REQUEST['nom']) ;

else die ( "<p> Entrée votre nom</p>") ;

if (isset($_REQUEST['date_debut']))

$date_debut=$bdd->quote($_REQUEST['date_debut']) ;


else die ( "<p> Entrée la  Date Debut </p>") ;

if (isset($_REQUEST['date_fin']))

$date_fin=$bdd->quote($_REQUEST['date_fin']) ;

else die ( "<p> Entrée la Date Fin </p>") ;

if (isset($_REQUEST['type_salles']))


	$type_salles=$bdd->quote($_REQUEST['type_salles']) ;


else die ( "<p> Entrée type de salles</p>") ;


if (isset($_REQUEST['type_event']))


	$type_event=$bdd->quote($_REQUEST['type_event']) ;


else die ( "<p> Entrée type d'événement</p>") ;
 function  get_prix($bdd,$type_salles )
{
	$sql="SELECT prix FROM salles where type='$type_salles'" ;
	$reponse=$bdd->query($sql) or die ($bdd->errorInfo()[2]) ;
	$prix=$reponse->fetchObject() ;
$tarif=	$prix->prix +(500*4) ;
	return $tarif ;
}
	$prix = get_prix($bdd , $_REQUEST['type_salles']) ;
 
if(isset($_POST['Enregistrer']) and($date_fin<$date_debut)){
$msg= "date début ne peut pas etre supérieure à la date de fin";
	header('location: client.php?msg='.$msg.'');
}
else{
	 $sql = "INSERT INTO reservation (reservation_id,nom,email,telephone,type_salles,type_event,date_debut, date_fin,prix)
                        VALUES(NULL,$nom,$email ,$telephone,$type_salles,$type_event,$date_debut,$date_fin,'$prix')";
						$nb=$bdd->exec($sql) ;
						if($nb!=1)
die("<p> Impossible d'effectuer la requete!".$bdd->errorInfo()[2]."</p>") ;
else{

					$msg= "SUCCESSFULL!";
					header('location: client.php?msg='.$msg.'');
					
}
}


	













/*
function getDatee($bdd,$nom,$email,$telephone, $type_salles,$type_event, $date_debut,$date_fin)
{
	$sql="SELECT * FROM reservation where type_salles=$type_salles" ;
	$reponse=$bdd->query($sql) or die ($bdd->errorInfo()[2]) ;
	$date=$reponse->fetchObject() ;
	$Date_debut =(strtotime($date->date_debut)); 
		$Date_fin =(strtotime($date->date_fin)) ;
 
if(isset($_POST['Enregistrer']) and($date_fin<$date_debut)){
echo 'date début ne peut pas etre supérieure à la date de fin';	

}


else if  (isset($_POST['Enregistrer']) and($date_debut> $Date_debut) && ($date_debut> $Date_fin))
	{
		ajouter($bdd,$nom,$email,$telephone,$type_salles,$type_event,$date_debut,$date_fin) ;
	
		
	}
	

else if (isset($_POST['Enregistrer']) and$Date_debut> $date_fin)
{
	ajouter($bdd,$nom,$email,$telephone,$type_salles,$type_event,$date_debut,$date_fin) ;
}
else{
	
	echo 'Cette date est réservée Pouvez-vous choisir une autre date?' ;
}
	
	

}
if (isset($_POST['Enregistrer']))
{
	getDatee($bdd,$nom,$email,$telephone, $type_salles,$type_event, $date_debut,$date_fin) ;
}




 


*/


?>
