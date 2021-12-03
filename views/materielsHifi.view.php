<?php ob_start() ?>


<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Marque</th>
        <th>Prix</th>
        <th colspan="2">Actions</th>
    </tr>

    <tr>
        <td class="align-middle"><img src="public/images/materielsHifi/casque.jpg" width="60px;"></td>
        <td class="align-middle">Casque Bluetooth</td>
        <td class="align-middle">Yamaha</td>
        <td class="align-middle">49 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/materielsHifi/enceinteBluetooth.jpg" width="60px;"></td>
        <td class="align-middle">Enceinte Bluetooth</td>
        <td class="align-middle">Sony</td>
        <td class="align-middle">99 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/materielsHifi/homeCinema.jpg" width="60px;"></td>
        <td class="align-middle">Home Cinema</td>
        <td class="align-middle">Philips</td>
        <td class="align-middle">158 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/materielsHifi/microChaine.jpg" width="60px;"></td>
        <td class="align-middle">Micro Chaine</td>
        <td class="align-middle">Grundig</td>
        <td class="align-middle">149 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/materielsHifi/miniAmplificateur.jpg" width="60px;"></td>
        <td class="align-middle">Mini Amplificateur</td>
        <td class="align-middle">Samsung</td>
        <td class="align-middle">200 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>  
</table>

<a href=""class="btn btn-success d-block">Ajouter</a>

<?php
$content= ob_get_clean();
$titre="Matériels Hifi";
require "views/template.php";

?>