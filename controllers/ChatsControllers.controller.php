<?php  
require_once "models/Chat.Manager.php";


class ChatsControllers
{
    private $ChatManager;



    public function __construct()
    {
        $this->ChatManager = new ChatManager;
        $this->ChatManager->chargementChats();
    }

    public function afficherChat()
    {
        $chats = $this->ChatManager->getChats();
        require "views/chat.view.php";
        
    }

    public function ajoutChat($user,$message)
    {
        $this->ChatManager->ajoutChatdb($user,$message);
    }
   
}