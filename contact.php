<?php include 'include/header.php';

if (isset($_POST['message']))
	{
		$objet = mysqli_real_escape_string($CO, $_POST['objet']);
        $message = mysqli_real_escape_string($CO, $_POST['message']);
    }
?>
<html>

<form class="uk-grid-small" uk-grid style="margin-left: 1000px, margin-right: 1000px">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Envoyez nous un message </legend>
        <br>

        <form>
    <input class="uk-input uk-width-1-2" type="text" placeholder="sujet">
</form>

        <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" placeholder="Ecrivez votre message : "></textarea>
        </div>


        <p uk-margin>
        <button class="uk-button uk-button-primary">Envoyer !</button>
        </p>

    </fieldset>
</form>

</html>