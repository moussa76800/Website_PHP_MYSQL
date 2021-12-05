<?php  
require_once "models/Chat.Manager.php";


class ChatsControllers
{
    private $ChatManager;



    public function __construct()
    {
        $this->chatManager = new ChatManager;
        $this->chatManager->chargementChats();
    }

    public function afficherChats()
    {
        $chats = $this->ChatManager->getChats();
        require "views/chat.view.php";
        
    }



    public function ajoutChat()
    {
        require "views/chat.view.php";
    }

    public function ajoutChatValidation()
    {

       
        $this->ChatManager->ajoutLivreBd($_POST['user'], $_POST['message']);

       $_SESSION['alert']=[
           "type"=> "sucess",
           "msg"=> "Ajout Réalisé"
       ];

        header('Location: ' . URL . "chat");
    }
   
}