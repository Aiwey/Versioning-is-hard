<?php

namespace app\controllers;
use app\forms\CommentForm;
use core\App;
use core\Utils;
use core\Validator;
use core\ParamUtils;
use core\Message;
use core\SessionUtils;

class commentCCtrl {
    private $form;
    public function __construct() {
        $this->form = new CommentForm();
    }
    public function validateAddComment(){
        $v = new Validator();
        $this->form->commentContent = $v->validateFromPost("comment",
            [  
                'trim' => true,
                'required' => true,
                'required_message' => 'hemlo',
                'min_length' => 3,
                'max_length' => 120,
                'validator_message' => 'Comment has to be between 3-120 characters',
            ]);
        return !App::getMessages()->isError();
    }
    public function action_addComment(){
        if ($this->validateAddComment()){
            $idUzytkownik = SessionUtils::load("idUser",$keep=true);
            $id_album = ParamUtils::getFromPost("idAlbum");
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
                Utils::addInfoMessage("Succesfuly added comment");
                $this->generateCommentView();
        } else {
            $this->generateAddCommentView();
        }
    }
    public function action_showComment(){
        $this->generateCommentView();
    }
    public function action_showAddComment(){
        $this->generateAddCommentView();
    }
    public function generateCommentView(){
        $id_album = ParamUtils::getFromPost("idAlbum");
        try {
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
        } catch (\PDOException $e){
            Utils::addErrorMessage('Wystapil nieoczekiwany błąd podczas wyświetlania koszyka');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());}}
                
        App::getSmarty()->assign("comment", $records);
        App::getSmarty()->assign("idAlbum", $id_album);
        App::getSmarty()->display("commentPage.tpl");
    }
    public function generateAddCommentView(){
        $id_album = ParamUtils::getFromPost("idAlbum");
        App::getSmarty()->assign('comment', $this->form); //dane do formularza dla widoku
        App::getSmarty()->assign('idAlbum', $id_album);
        App::getSmarty()->display('addComment.tpl');
    }
}

