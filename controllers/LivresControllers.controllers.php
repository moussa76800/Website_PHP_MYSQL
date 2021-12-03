<?php


require_once "models/LivreManager.class.php";

class LivresControllers
{
    private $livreManager;



    public function __construct()
    {
        $this->livreManager = new LivreManager;
        $this->livreManager->chargementLivres();
    }


    public function afficherLivres()
    {
        $livres = $this->livreManager->getLivres();
        require "views/livres.view.php";
        
    }


    public function afficherUnLivre($id)
    {
        $livre = $this->livreManager->getLivreById($id);
        require "views/afficherUnLivre.view.php";
    }


    public function ajoutLivre()
    {
        require "views/ajoutLivre.view.php";
    }


    public function ajoutLivreValidation()
    {

        $file = $_FILES['image'];
        $repertoire = "public/images/livres/";
        $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        $this->livreManager->ajoutLivreBd($_POST['title'], $_POST['author'], $_POST['numbersOfPages'], $_POST['price'], $nomImageAjoute);

       

        header('Location: ' . URL . "livres");
    }


    private function ajoutImage($file, $dir)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        if (!file_exists($dir)) mkdir($dir, 0777);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if (file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random . "_" . $file['name']);
    }


    public function suppressionLivre($id)
    {
        $nomImage = $this->livreManager->getLivreById($id)->getImage();
        unlink("public/images/livres/" . $nomImage);
        $this->livreManager->suppressionLivreBD($id);

        
        header('Location: ' . URL . "livres");
    }


    public function modificationLivre($id)
    {
        $livre = $this->livreManager->getLivreById($id);
        require "views/modifierLivre.view.php";
    }


    public function modifLivreValidation()
    {
        $imageActuelle = $this->livreManager->getLivreById($_POST['identifiant'])->getImage();
        $file = $_FILES['image'];

        if ($file['size'] > 0) {

            unlink("public/images/livres/".$imageActuelle);
            $repertoire = "public/images/livres/";
            $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        } else {
            $nomImageAjoute = $imageActuelle;
        }
        $this->livreManager->modificationLivreBD($_POST['identifiant'],$_POST['title'],$_POST['author'],$_POST['numbersOfPages'],$_POST['price'],$nomImageAjoute);
        
        header('Location: '. URL . "livres");
    }
}
