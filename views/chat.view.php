<?php

ob_start() ?>


<table class="table text-center">
    <tr class="table-dark">
        <th>User</th>
        <th>Message</th>

    </tr>

    <?php

    for ($i = 0; $i < count($chats); $i++) : ?>
        <tr>

            <td class="align-middle"><a href="<?= URL ?>chat<?= $chats[$i]->getId(); ?>"><?= $chats[$i]->getUser(); ?></a></td>
            <td class="align-middle"><?= $message[$i]->getMessage(); ?></td>
            

        </tr>
    <?php endfor; ?>
</table>

<a href="<?= URL ?>chat/add" class="btn btn-success d-block">Valider</a>

<br>


<h2 class=" p-2 m-2 text-center ">......Bienvenu dans le mini-chat ......</h2>
<?php
$content = ob_get_clean();
$titre = "Mini-chat";
require "template.php";

?>