<?php
$host = "10.53.130.250"; // adresse du serveur de bases de données sql.bts-sio.com
$user = "sig"; // utilisateur autorisé
$pwd = "sig"; // mot de passe de l'utilisateur
$bdd_name = "projet_photos"; // nom de la base de données

// on tente la connexion chez l'hébergeur - pas de gestion d'erreur
$CO = @mysqli_connect($host, $user, $pwd, $bdd_name);

if (!$CO) // Si la connexion a échoué ($CO vaut false) 
{
    // On récupère l'erreur générée par la première connexion, mais on ne l'affiche pas maintenant
    $error_production = mysqli_connect_error();
    // on tente la connexion en local : plateforme de développement
    $CO = @mysqli_connect("ftp.bts-sio.com", $user, $pwd, $bdd_name);
    if (!$CO) die("Aucune des deux connexions à MySQL n'a réussi.<br>
        Erreur du serveur en production : <b>$error_production</b><br>
        Erreur du serveur en développement : <b>".mysqli_connect_error()."</b>");
}


// Grain de sel
$gds = "projetphoto123x";

//
function mysqli_myquery($CO, $sql)
{
	$rs = mysqli_query($CO, $sql);
	if ($rs===false) 
	{
		die(mysqli_error($CO)."<br>dans la requête : <br><b>$sql</b>");	
	}
	else
	{
		return $rs;
	}
}


//Voir les fonctions et supprimer le fichier quand c finis ainsi que ce include
if(isset($_GET['table']))
{
	$table=$_GET['table'];
	$field=$_GET['field'];
	$where=$_GET['where'];
	if(sha1("$table$field$where".$gds."AENV") != $_GET['hash']) die ('Piratage !');
	$value=mysqli_real_escape_string($CO,$_GET['value']);
	mysqli_myquery($CO,"UPDATE $table SET $field='$value' WHERE $where");
	die('ok');
}
?>