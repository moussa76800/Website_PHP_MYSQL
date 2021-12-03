<?php

ob_start();


    ?>


    <table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Title</th>
        <th>Authors</th>
        <th>Numbers of pages</th>
        <th>Price</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php

       for ($i=0; $i< count($livres); $i++) : ?>
        <tr>
            <td class="align-middle"><img src="public/images/livres/<?= $livres[$i]->getImage();?>" width="60px;"></td>
            <td class="align-middle"><a href="<?= URL ?>livres/display/<?= $livres[$i]->getId(); ?>"><?= $livres[$i]->getTitle(); ?></a></td>
            <td class="align-middle"><?=$livres[$i]->getAuthors();?></td>
            <td class="align-middle"><?=$livres[$i]->getNumbersOfPages();?></td>
            <td class="align-middle"><?=$livres[$i]->getPrice();?> Euros</td>
            <td class="align-middle"><a href="<?= URL ?>livres/modify/<?= $livres[$i]->getId(); ?>" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle">
                <form method="POST" action="<?= URL ?>livres/delete/<?= $livres[$i]->getId(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre ?');">
             <button class = "btn btn-danger" type="submit">Supprimer</button>
        </form></td>
           
        </tr>
        <?php endfor; ?>
 </table>

 <a href="<?= URL ?>livres/add" class="btn btn-success d-block">Ajouter</a>


<?php
$content = ob_get_clean();
$titre = "Liste des livres";
require "template.php";
?>