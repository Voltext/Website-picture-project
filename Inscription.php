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
   <div class="column" id="column">
     <h2 class="ui teal image header">
      <img src="https://semantic-ui.com/examples/assets/images/logo.png" class="image">
       <div class="content">
        Inscription
      </div>
     </h2>
     <form class="ui large form">
       <div class="ui stacked segment">
         <div class="field">
           <div class="ui left icon input">
             <i class="user icon"></i>
            <input type="text" name="NomFamille" placeholder="Nom de Famille">
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="Prenom" placeholder="Prénom">
          </div>        
        </div>

         <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="Pseudo" placeholder="Pseudo">
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="text" name="email" placeholder="Adresse mail">
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="calendar icon"></i>
            <input type="date" name="Dtnaissance" placeholder="JJ/MM/AAAA">
          </div>        
        </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Mot de passe">
           </div>
         </div>

         <div class="field">
           <div class="ui left icon input">
             <i class="lock icon"></i>
            <input type="password" name="confirmpassword" placeholder="Confirmer le mot de passe">
           </div>
         </div>

        <div class="field">
          <div class="ui left icon input">
            <i class="folder icon"></i>
            <input type="file" name="fichieravatar" placeholder="Choisir avatar">
          </div>
        </div>

        <div class="ui fluid large teal submit button">S'inscrire</div>
       </div>
 
       <div class="ui error message"></div>
 
     </form> 
      <div class="ui fluid large teal submit button"><a href="Connexion.php" style="color: white">Connexion</a></div>
     </div>
  
 </div>
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
