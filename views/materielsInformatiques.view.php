<?php ob_start() ?>




<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>

    <tr>
        <td class="align-middle"><img src="public/images/materielsInformatiques/clavierGamer.jpg" width="60px;"></td>
        <td class="align-middle">Clavier-Gamer</td>
        <td class="align-middle">Yamaha</td>
        <td class="align-middle">49 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/materielsInformatiques/pc.jpg" width="60px;"></td>
        <td class="align-middle">PC</td>
        <td class="align-middle">Sony</td>
        <td class="align-middle">399 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/materielsInformatiques/pcPortable.jpg" width="60px;"></td>
        <td class="align-middle">PC Portable</td>
        <td class="align-middle">Samsung</td>
        <td class="align-middle">200 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>  
    <tr>
        <td class="align-middle"><img src="public/images/materielsInformatiques/sourisOptique.jpg" width="60px;"></td>
        <td class="align-middle">Souris Optique</td>
        <td class="align-middle">Philips</td>
        <td class="align-middle">15 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/images/materielsInformatiques/tourGaming.jpg" width="60px;"></td>
        <td class="align-middle">Tour-Gaming</td>
        <td class="align-middle">Grundig</td>
        <td class="align-middle">149 Euros</td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    
</table>
<a href=""class="btn btn-success d-block">Ajouter</a>
<?php
$content= ob_get_clean();
$titre="Matériels Informatiques";
require "views/template.php";

?>