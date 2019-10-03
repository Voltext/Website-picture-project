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

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="https://semantic-ui.com/examples/assets/images/logo.png" class="image">
      <div class="content">
        Inscription
      </div>
    </h2>
    <form class="ui large form" method="Post">
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

        <div class="ui fluid large teal submit button"><a href="#" style="color: white">S'inscrire</a></div>
      </div>

      <div class="ui error message"></div>

    </form>

    
      <div class="ui fluid large teal submit button"><a href="#" style="color: white">Connexion</a></div>
    </div>
  
</div>
<script type="text/javascript" src="https://cdnjs.cloudflareuj.com/ajax/libs/semantic-ui/2.4.1/semantic.js"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"/>
</body>

</html>
<!-- FIN INSCRIPTION -->