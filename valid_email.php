<?php include 'Config_bdd/bdd.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Riders Aubanel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/css/uikit.min.css" />

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-primary bg-light">
  <a class="navbar-brand" style="color:#0f6ecd">Riders D'aubanel</a>
  <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse uk-navbar-center" id="navbarToggleExternalContent">
    <ul class="nav justify-content-center" >
      <li class="nav-item active">
        <a class="nav-link"  style="color:#0f6ecd"> Vous venez de valider votre mail<span class="sr-only">(current)</span></a>
      </li>
  </ul>
</div>
</nav>
<?php
	if(isset($_GET["usr_id"]))
	{
		$usr_id = $_GET["usr_id"];
		if ($_GET["hash"] != sha1($usr_id.$gds."MDPO")) 
		{
			die ("tentative de piratage");
		}
		else
		{
			mysqli_myquery($CO,"UPDATE user SET usr_email_valide = 1 WHERE usr_id = $usr_id");
			echo "<div>
			        <div class='uk-card uk-card-primary uk-card-body'>
			        	Merci vôtre a bien été valider, allez vous identifié <a href=libraries_login/>authentifiez-vous</a>
			        </div>
			    </div>";
		}
	}

	?>
	<br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
<?php include 'fin_page.php'; ?>