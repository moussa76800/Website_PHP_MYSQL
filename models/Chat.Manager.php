<?php

require_once "Model.class.php";
require_once "chat.class.php";

class ChatManager extends Model
{
    private $chats; // TABLEAU DE chats

    public function ajoutChat($chat)
    {
        $this->chats[] = $chat;
    }

    public function getChats()
    {
        return $this->chats;
    }
    public function chargementChats()
    {
        $req = $this->getBdd()->prepare("SELECT*FROM chat");
        $req->execute();
        $meschats = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($meschats as $chat) {
            $liste = new Chat($chat['id'], $chat['user'], $chat['message']);
            $this->ajoutChat($liste);
        }
    }
    

    public function ajoutChatdb($user, $message)
    {
        $req = "INSERT INTO chat (user,message)
                VALUES (:user, :message )";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":user", $user, PDO::PARAM_STR);
        $stmt->bindValue(":message", $message, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $chat = new Chat($this->getBdd()->lastInsertId(), $user, $message);
            $this->ajoutChat($chat);
        }
    }


}