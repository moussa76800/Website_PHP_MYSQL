<?php

ob_start() ?>
<h2 class=" p-2 m-2 text-center ">......Bienvenu dans le mini-chat ......</h2>

<div>
    <form action="<?= URL ?>chat" method="POST">
            <label for="user">User : </label><input type="text" name='user' placeholder='Pseudo'>
            <label for="message">Message : </label><input type="text" name='message' placeholder='écrire votre message ..'>
            <input type="submit" name="insertchat" value='Send'>
    </form>
</div>
<div>
    <table>
        <tr>
            <td><?= $chats[0]->getUser();?></td>
            <td><?= $chats[0]->getMessage();?></td>
        </tr>
    </table>
</div>

<?php
$content = ob_get_clean();
$titre = "Mini-chat";
require "template.php";

?>