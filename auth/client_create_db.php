<?php
include_once '../connexion/connexion.php';
$bdd = maConnexion();
$table = "utilisateurs";

if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
	$email = $bdd->quote($_REQUEST['email']);
} else {
	die("<p>Entrée votre email</p>");
}

if (isset($_REQUEST['mdp']) && !empty($_REQUEST['mdp'])) {
	$mdp = $bdd->quote($_REQUEST['mdp']);
} else {
	die("<p>Entrée votre mdp</p>");
}

if (isset($_REQUEST['nom']) && !empty($_REQUEST['nom'])) {
	$nom = $bdd->quote($_REQUEST['nom']);
} else {
	die("<p>Entrée votre nom</p>");
}

if (isset($_REQUEST['telephone']) && !empty($_REQUEST['telephone'])) {
	$telephone = $_REQUEST['telephone'];
	settype($telephone, "integer");
} else {
	die("<p>Entrée votre telephone</p>");
}

$target_dir = "../uploads/";

// Check if the directory exists, if not, create it
if (!file_exists($target_dir)) {
	mkdir($target_dir, 0755, true);
}

if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
	$target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	// Check if file is an actual image
	$check = getimagesize($_FILES["profile_image"]["tmp_name"]);
	if ($check === false) {
		die("<p>Le fichier n'est pas une image.</p>");
	}

	// Check file size
	if ($_FILES["profile_image"]["size"] > 500000) {
		die("<p>Votre fichier est trop grand.</p>");
	}

	// Allow certain file formats
	$allowed_types = ['jpg', 'png', 'jpeg', 'gif'];
	if (!in_array($imageFileType, $allowed_types)) {
		die("<p>Seuls les formats JPG, JPEG, PNG et GIF sont autorisés.</p>");
	}

	// Attempt to move the uploaded file to the target directory
	if (!move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
		die("<p>Erreur lors du téléchargement de l'image.</p>");
	}
	$profile_image = $bdd->quote($target_file);
} else {
	$profile_image = $bdd->quote('../uploads/default.png'); // Default image if none uploaded
}

$sql = "INSERT INTO $table (id, nom, email, mdp, telephone, role, profile_image)
        VALUES (NULL, $nom, $email, MD5($mdp), $telephone, 'client', $profile_image)";

$nb = $bdd->exec($sql);
if ($nb != 1) {
	die("<p>Impossible d'effectuer la requête! " . $bdd->errorInfo()[2] . "</p>");
} else {
	header('Location: signin_signup.php');
	echo "<p>Enregistrement ajouté</p><br>";
	echo "L'identifiant du client est : " . $bdd->lastInsertId();
}
?>