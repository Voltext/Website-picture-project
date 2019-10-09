<html>
<head>
<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    </body>
    <nav class="uk-navbar-container uk-margin" uk-navbar="mode: click">

    <div class="nav-overlay uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="#">PhotoSpot</a>

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#"><span uk-icon="home"></span>&nbsp;&nbsp;Accueil</a></li>
            <li><a href="#"><span uk-icon="cloud-upload"></span>&nbsp;&nbsp;Ajouter une photo</a></li>
            <li><a href="#"><span uk-icon="image"></span>&nbsp;&nbsp;Toutes les photos</a></li>
            <li><a href="#"><span uk-icon="users"></span>&nbsp;&nbsp;Tous les utilisateurs</a></li>
            <li><a href="#"><span uk-icon="mail"></span>&nbsp;&nbsp;Contact</a></li>
        </ul>

    </div>

    <div class="nav-overlay uk-navbar-right" style="margin-right: 20px;">

        <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        <ul class="uk-navbar-nav">
            <li>
                <span uk-icon="user" style="cursor: pointer;"></span>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active" style="font-size: 18px;"><a href="#">Profil</a></li>
                        <li><a href="#">Mon profil</a></li>
                        <li><a href="#">Mon compte</a></li>
                        <br>
                        <li><a href="#" style="color: red;">Deconnexion</a></li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>

    <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

        <div class="uk-navbar-item uk-width-expand">
            <form class="uk-search uk-search-navbar uk-width-1-1">
                <input class="uk-search-input" type="search" placeholder="Recherchez un mot clé ou le titre d'une photo" style="text-align: center; " autofocus>
            </form>
        </div>

        <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

    </div>

</nav>