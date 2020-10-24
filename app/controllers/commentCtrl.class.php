<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use core\SessionUtils;
use app\forms\CommentForm;

class commentCtrl {
     private $form;
     
    public function __construct() {
        $this->form = new CommentForm();
    }
    
    public function action_showComment(){
        $id_album = ParamUtils::getFromCleanURL(1,true,"Błędne wywołanie aplikacji");
        $records = App::getDB()->select("comment", [
            "[>]album" =>["Album_idAlbum"=>"idAlbum"],
            "[>]user" =>["User_idUser"=>"idUser"]
        ],[
            "comment.Album_idAlbum",
            "comment.CommentContent",
            "album.AlbumName",
            "user.UserLogin"
        ],[
            "album.idAlbum" => $id_album
        ]);
        
        App::getSmarty()->assign("comment", $records);
        App::getSmarty()->assign("idAlbum", $id_album);
        App::getSmarty()->display("commentPage.tpl");
        
        
    }
    public function action_showAddComment(){
        
        $id_album = SessionUtils::load("idAlbum", $keep=true);
        Utils::addInfoMessage($id_album);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('idAlbum', $id_album);
        App::getSmarty()->display("addComment.tpl");
        
    }
    
    public function validateComment(){
         
        //$this->form->commentContent = ParamUtils::getFromPost('comment');
        $id_album = SessionUtils::load("idAlbum", $keep=true);
        $v = new Validator();
        $this->form->commentContent = $v->validateFromRequest("comment",
              [  'trim' => true,
  'required' => true,
  'required_message' => 'hemlo',
  'min_length' => 3,
  'max_length' => 120,
  'validator_message' => 'Comment has to be between 3-120 characters',
]);
       return !App::getMessages()->isError();        
      
    }
    
    public function action_addComment(){
        if ($this->validateComment()){
       $id_album = ParamUtils::getFromSession($id_album,true,"kanapka");
      
        $idUzytkownik = SessionUtils::load("idUser",$keep=true);
   try{      
   App::getDB()->insert("comment",[
       "CommentContent" => $this->form->commentContent,
       "Album_idAlbum" => $id_album,
       "User_idUser" => $idUzytkownik
       ]);
   } catch (\PDOException $e){
            Utils::addErrorMessage('Wystapil nieoczekiwany błąd podczas dodawania do koszyka');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());}}
    Utils::addInfoMessage($id_album);
    Utils::addInfoMessage($idUzytkownik);
    App::getSmarty()->assign("commentContent",$this->form->commentContent);
    Utils::addInfoMessage($this->form->commentContent);
    App::getRouter()->redirectTo("showComment");
        } else {
            App::getSmarty() ->assign('comment', $this->form);
            App::getSmarty()->display('addComment.tpl');
        }
    
}


            }
    

