<!-- DEBUT INSCRIPTION -->
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

  <script src="assets/library/jquery.min.js"></script>
  <script src="../dist/components/form.js"></script>
  <script src="../dist/components/transition.js"></script>
  <script src="js/script.js"></script>


</head>
<body>
  <div id="large-header" class="large-header">
        <canvas id="demo-canvas" width="1051" height="290"></canvas>
 <div class="ui middle aligned center aligned grid">
   <div class="columnC" id="columnC">
     <h2 class="ui teal image header">
      <img src="https://semantic-ui.com/examples/assets/images/logo.png" class="image">
       <div class="content">
        Connexion
      </div>
     </h2>
     <form class="ui large form">
       <div class="ui stacked segment">

         <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="PseudoOrEmail" placeholder="Pseudo ou Email">
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Mot de passe">
           </div>
         </div>

        <div class="ui fluid large teal submit button" name="submit" >Se connecter</div>
       </div>
 
       <div class="ui error message"></div>
 
     </form> 
      <div class="ui fluid large teal submit button"><a href="Inscription.php" style="color: white">Inscription</a></div>
     </div>
  
 </div>
</div>
  <?php 
  if (isset($_POST['loginC'])) 
  {
    $login = mysqli_real_escape_string($CO,$_POST["loginC"]);
    $pwd = mysqli_real_escape_string($CO,$_POST["pwdC"]);
    $sql = "select * from user where (usr_login='$login' or usr_email='$login') AND usr_pwd=sha1('$pwd{$gds}PWD')";
    $rs_user = mysqli_query($CO,$sql) or die(mysqli_error($CO));
    if($user = mysqli_fetch_assoc($rs_user))
    {
      if (!$user['usr_email_valide']) 
      {
        echo "<script>alert('Vous devez valider votre mail avant !');</script>";
        echo "<script type='text/javascript'>document.location.replace('?');</script>";
        exit();
      }
      else
      {
        $time = isset($_POST['rememberme'])?(time()+ 3600 * 24 * 365):0;
        setcookie('usr_login',$user['usr_login'],$time, '/');
        setcookie('user_id',$user['usr_id'],$time, '/');
        setcookie('user_id_h',sha1($user['usr_id'].$gds."COK"),$time, '/');
        header("location:../Accueil.php");
      }
    }
    else 
    {
      echo "<script>alert('Erreur dans le login ou le mot de passe.');</script>";
    }
    $login = isset($_POST["loginC"])?htmlspecialchars($_POST["loginC"], ENT_QUOTES):'';
  }


  if (isset($message_erreur)) 
  {
    echo "$message_erreur";
  }
  $login = isset($_POST["loginC"])?htmlspecialchars($_POST["loginC"], ENT_QUOTES):'';
  $email = isset($_POST["emailC"])?htmlspecialchars($_POST["emailC"], ENT_QUOTES):'';
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
<!-- FIN INSCRIPTION -->
