<?php



define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));



require_once "controllers/LivresControllers.controllers.php";
$livreController = new LivresControllers;

require_once "controllers/ChatsControllers.controller.php";
$chatController = new ChatsControllers;


try {
    if (empty($_GET['page'])) {
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);


        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
            case "livres":
                if (empty($url[1])) {
                    $livreController->afficherLivres();
                } else if ($url[1] === "display") {
                    $livreController->afficherUnLivre($url[2]);
                } else if ($url[1] === "modify") {
                    $livreController->modificationLivre($url[2]);
                } else if ($url[1] === "validationModif") {
                    $livreController->modificationLivreValidation();
                } else if ($url[1] === "add") {
                    $livreController->ajoutLivre();
                } else if ($url[1] === "validationAjout") {
                    $livreController->ajoutLivreValidation();
                } else if ($url[1] === "delete") {
                    $livreController->suppressionLivre($url[2]);
                } else {

                    throw new Exception("La page est inéxistante..");
                }
                break;
            case "materielsHifi":
                require "views/materielsHifi.view.php";
                break;
            case "materielsInformatiques":
                require "views/materielsInformatiques.view.php";
                break;
            case "inscription":
                require "views/inscription.view.php";
                break;
            case "chat":
                if (empty($url[1])) {
                    $chatController->afficherChats();
                } else if ($url[1] === "add") {
                    $chatController->ajoutChat();
                } else if ($url[1] === "validationAjout") {
                    $chatController->ajoutChatValidation();
                }
                break;
            default:
                throw new Exception("Veuillez taper la bonne rubrique !!");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
