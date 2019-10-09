<?php 
if (!isset($Bdd))
{
	include "bdd.php";  
}

include 'config_connexion.php';

if(!is_authentified())
{
	header("Location:index.php");    
	exit();
}
?>