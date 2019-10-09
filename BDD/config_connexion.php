<?php

// Est ce que le cookie à été truqué 
if (is_authentified() && $_COOKIE['user_id_h'] != sha1($_COOKIE['user_id'].$gds."COK")) 
{
	die("DOMMAGE, tu na pas réussi");
}

if(!is_authentified())
{
    header("Location:Index.php");    
    exit();
}



/*******************************************
***********FONCTIONS D'AUTHENTIFICATION***********
*****************************************/

function is_authentified()
{
	return isset($_COOKIE['user_id']); 
}

function is_admin()
{
	if (!is_authentified()) 
	{
		return false;
	}

	if (isset($_SESSION['usr_droit'])) 
	{
		return $_SESSION['usr_droit'];
	}

	global $CO;

	$rs_user = mysqli_myquery($CO,"select usr_droit from user where usr_id = {$_COOKIE['user_id']}");
	$user = mysqli_fetch_assoc($rs_user);


	return $_SESSION['usr_droit'] = $user['usr_droit']==2; 
}
