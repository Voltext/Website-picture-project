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

  <script src="assets/library/jquery.min.js"></script>
  <script src="../dist/components/form.js"></script>
  <script src="../dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
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
 <style type="text/css">
  #column{
    position: absolute;
    bottom: 20%;
  }
 .large-header {
   position: relative;
   width: 100%;
   background: #111;
   overflow: hidden;
   background-size: cover;
   background-position: center center;
   z-index: 1;
  }

  .demo .large-header {
     background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo-bg.jpg");
  }

  .main-title {
     position: absolute;
     margin: 0;
     padding: 0;
     color: #F9F1E9;
     text-align: center;
     top: 13%;
     left: 50%;
     -webkit-transform: translate3d(-50%, -50%, 0);
     transform: translate3d(-50%, -50%, 0);
  }

  .demo .main-title {
     text-transform: uppercase; 
     letter-spacing: 0.1em;
  }

  .main-title .thin {
     font-weight: 200;
  }

  ul{
      max-width: 300px;
    }
    ul li{

      color: #dadada;
        background-color: rgb(118, 132, 131);
        font-size: 22px;
        margin-top: 22px;
        padding: 7px 0px 7px 18px;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
        transition: 0.6s all;
    }
    ul li:hover{
      transition: 0.6s all;
      background-color:rgba(9, 0, 90, 0.4);
    }
    .sites{
      position: absolute;
      top: 24%;
      /*left: 20%;*/
      margin: 10px;
    }

  @media only screen and (max-width: 768px) {
     .demo .main-title {
        font-size: 3em;
     }
  }
    </style>
  <script>
    window.console = window.console || function(t) {};
  </script>
  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
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
