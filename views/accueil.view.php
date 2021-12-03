<?php

ob_start() ?>
<br>
<br>
<br>
<h2 class=" p-2 m-2 text-center ">......Bienvenu sur le site ......</h2>
<?php
$content= ob_get_clean();
$titre="FNACQ";
require "template.php";

?>

