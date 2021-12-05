<?php 
ob_start(); 
?>

<form action="<?= URL ?>chat/validationAjout" method="post">
    Votre pseudo : <input type="text" name="pseudo" /><br />
    Votre message : <input type="text" name="message" /><br />
    <input type="submit" class="btn btn-primary" value="Envoyer" />
</form>



<?php
$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "template.php";
?>
