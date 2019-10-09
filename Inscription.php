<!-- DEBUT INSCRIPTION -->
<?php include 'BDD/bdd.php'; 
if(isset($_GET["pseudo"]))
{
  $login = $_GET["pseudo"];
  $sql = "SELECT usr_login from user where usr_login= '$login'";
  $req = mysqli_myquery($CO,$sql);
  $nb_pseudo = mysqli_num_rows($req);
  if($nb_pseudo == 1 )
  {
    echo "<p id='utlise'>Le login est déjà utilisé</p>";
  }
  else
  {
    echo "<p id='pouvoir'>Vous pouvez utiliser ce login</p>";
  }
  exit;
} 
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <script src="js/script.js"></script>
</head>
<body>

  <div id="large-header" class="large-header">
  <canvas id="demo-canvas" width="1051" height="290"></canvas>
  <div class="ui middle aligned center aligned grid">
   <div class="columnI" id="columnI">
     <h2 class="ui teal image header">
      <img src="https://semantic-ui.com/examples/assets/images/logo.png" class="image">
       <div class="content">
        Inscription
      </div>
     </h2>
     <form class="ui large form" method="POST">
       <div class="ui stacked segment">
         <div class="field">
           <div class="ui left icon input">
             <i class="user icon"></i>
            <input type="text" name="NomFamille" placeholder="Nom de Famille" required>
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="Prenom" placeholder="Prénom" required>
          </div>        
        </div>

         <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="Pseudo" placeholder="Pseudo" required>
            <span id='msgbox'></span>
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="text" name="email" placeholder="Adresse mail" required>
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="calendar icon"></i>
            <input type="date" name="Dtnaissance" placeholder="JJ/MM/AAAA" required>
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Mot de passe" required>
           </div>
         </div>

         <div class="field">
           <div class="ui left icon input">
             <i class="lock icon"></i>
            <input type="password" name="confirmpassword" placeholder="Confirmer le mot de passe" required>
           </div>
         </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="folder icon"></i>
            <input type="file" name="fichieravatar" placeholder="Choisir avatar">
          </div>
        </div>

        <button class="ui fluid large teal submit button" name="submit" id="submitI"> S'inscrire</button>
       </div>
 
       <div class="ui error message"></div>
 
     </form> 
      <div class="ui fluid large teal submit button"><a href="Connexion.php" id="connexion-color">Connexion</a></div>
     </div>
  
 </div>

  <?php 
  if (isset($_POST["submit"])) 
  {
    $NomFamille = mysqli_real_escape_string($CO,$_POST["NomFamille"]);
    $Prenom = mysqli_real_escape_string($CO,$_POST["Prenom"]);
    $Pseudo = mysqli_real_escape_string($CO,$_POST["Pseudo"]);
    $email = mysqli_real_escape_string($CO,$_POST["email"]);
    $password = mysqli_real_escape_string($CO,$_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($CO,$_POST["confirmpassword"]);
    $fichieravatar = mysqli_real_escape_string($CO,$_POST["fichieravatar"]);

    $sql = mysqli_myquery($CO,"SELECT * from user");
    while($pseudo = mysqli_fetch_assoc($sql))
    {
      if ($login == $pseudo['usr_login']) 
      {
        echo "<script>alert('Vous ne pouvez pas vous inscrire avec un nom déjà existant');</script>";
        echo "<script type='text/javascript'>document.location.replace('Inscription.php');</script>";
        exit();
      }
    }

    if ($password != $confirmpassword) 
    {
      $message_erreur = "<script>alert('Erreur : les mots de passe ne correspondent pas');</script>";
    }
    elseif (!preg_match('~^[a-zA-Z0-9_-]{4,}$~', $login)) 
    {
      $message_erreur = "<script>alert('Le login n'est pas assez long');</script>";
    }
    else //Tout va bien
    {
      $ip = $_SERVER["REMOTE_ADDR"];
      $sql = "INSERT INTO user (usr_login,usr_pwd,usr_nom, usr_prenom, usr_mail, usr_ip_inscription)
      VALUES('$pseudo',sha1('$pwd1{$gds}CO'),'$NomFamille','$Prenom','$email','$ip')"; 
      mysqli_myquery($CO, $sql);
      $usr_id = mysqli_insert_id($CO); // récupérer l'id de l'user crée

      // envoie du mail
      $http = $_SERVER['REQUEST_SCHEME'];
      $host = $_SERVER['HTTP_HOST'];
      $script = 'valid_email.php';
      $url = "$http://$host/projet_photo/$script";
      $hash = sha1($usr_id.$gds."MDPO");
      $url .= "?usr_id=$usr_id&hash=$hash";
      $message = "Bonjour , vous venez de vous inscrire sur le site PhotoSpot $host.\n\n merci de cliqué sur le lien pour valider vôtre mail :\n\n $url\n\n";
      mail($email, 'Confirmation de l\'adresse mail',$message);
      header("Location:Connexion.php");
    }
  } 
  ?>

  <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js"></script>
  <script id="rendered-js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"/>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"/>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    function verif(login){
      $.ajax(
        {
          type : "GET",
          data : "loginI=" + login,
          async: true,
          success : function(result){
            $("span#msgbox").html(result);
          }
        });
    }
  </script>
<!-- FIN INSCRIPTION -->
