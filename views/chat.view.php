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

<?php
for ($i = 0; $i < count($chats); $i++) : ?>
    <div>
        <table>
            <tr>
                <td class="align-middle"><?= $chats[$i]->getId(); ?></td>
                <td class="align-middle"><?= $chats[$i]->getUser(); ?></td>
                <td class="align-middle"><?= $chats[$i]->getMessage(); ?></td>
            </tr>
        </table>
    </div>
<?php endfor; ?>

<?php
$content = ob_get_clean();
$titre = "Mini-chat";
require "template.php";

?>