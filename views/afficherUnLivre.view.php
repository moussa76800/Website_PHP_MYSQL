<?php 
ob_start(); 
?>

<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/images/livres/<?= $livre->getImage(); ?>">
    </div>
    <div class="col-6">
        <p>Title : <?= $livre->getTitle(); ?></p>
        <p>Author : <?= $livre->getAuthors(); ?></p>
        <p>numbers Of Pages : <?= $livre->getNumbersOfPages(); ?></p>
        <p>Price : <?= $livre->getPrice()." Euros"; ?></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = $livre->getTitle();
require "template.php";
?>