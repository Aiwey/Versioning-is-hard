<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\UserEditForm;
use app\forms\AdminCommentForm;

/**
 * Description of adminCtrl
 *
 * @author Ewa
 */
class adminCtrl {
    
    private $form;
    private $commentForm;
    public function __construct() {
        $this->form = new UserEditForm();
        $this->commentForm = new AdminCommentForm();
    }
    
    public function action_admin() {
        App::getSmarty()->display("adminPanel.tpl");
    }
    public function action_adminUsers(){
     $this->generateAdminUsers();
    }
    public function action_adminAlbums() {
        $records = App::getDB()->select("album",
                [
            "[>]label" =>["Label_idLabel"=>"idLabel"],
            "[>]band" =>["Band_idBand"=>"idBand"]
        ],
            [   "album.idAlbum",
                "album.AlbumName",
                "album.AlbumGenre",
                "album.AlbumDescription",
                "album.AlbumReleaseDate",
                "album.AlbumCoverPath",
                "label.LabelName",
                "band.BandName"]
        );
         App::getSmarty()->assign("album", $records);
         App::getSmarty()->display("adminPanelAlbums.tpl");
    }
    public function generateAdminUsers() {
           $records = App::getDB()->select("user",
            ["idUser","UserLogin","UserPassword","UserRole","UserAvatarPath","UserDescription"]
        );
         App::getSmarty()->assign("user", $records);
         App::getSmarty()->display("adminPanelUsers.tpl");
    }
     public function action_adminLabels() {
        $records = App::getDB()->select("label",
            ["idLabel","LabelName","LabelCountry","LabelCity","LabelStreet","LabelPropertyNumber"]
        );
         App::getSmarty()->assign("label", $records);
         App::getSmarty()->display("adminPanelLabels.tpl");
    }

     public function action_adminArtists() {
        $records = App::getDB()->select("artist",
            ["idArtist","ArtistFName","ArtistSName","ArtistNickname","ArtistBirth","ArtistDeath"]
        );
         App::getSmarty()->assign("artist", $records);
         App::getSmarty()->display("adminPanelArtists.tpl");
    }
    public function action_adminComments() {
        $records = App::getDB()->select("comment",
            ["idComment","CommentContent","User_idUser","Album_idAlbum"]
        );
         App::getSmarty()->assign("comment", $records);
         App::getSmarty()->display("adminPanelComment.tpl");
    }
    public function action_adminBands() {
        $records = App::getDB()->select("band",
            ["idBand","BandName","DateCreated","DateEnded"]
        );
         App::getSmarty()->assign("band", $records);
         App::getSmarty()->display("adminPanelBands.tpl");
    }
    //usuwanie
    public function action_userDelete() {
        // 1. walidacja id osoby do usuniecia
        $this->form->userId = ParamUtils::getFromPost('idperson');
                  try {
                // 2. usunięcie rekordu
                App::getDB()->delete("user", [
                    "idUser" => $this->form->userId
                ]);
                Utils::addInfoMessage('Deleted successfully');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Something has gone wrong!');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }  
         // 3. Przekierowanie na stronę listy osób
         Utils::addInfoMessage("User deleted successfully");
        
        
    }
    public function action_commentDelete() {
        // walidacja id komentarza do usunieca
        $this->commentForm->idComment = ParamUtils::getFromPost('idComment');
                  try {
                // 2. usunięcie rekordu
                App::getDB()->delete("comment", [
                    "idComment" => $this->commentForm->idComment
                ]);
                Utils::addInfoMessage('Deleted successfully');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Something has gone wrong!');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }  
         // 3. Przekierowanie na stronę listy osób
         Utils::addInfoMessage("Comment deleted successfully");
        
        
    }
    
    
    
    public function validateSave()  {
        $this->form->id = ParamUtils::getFromPost('idperson', true, 'Something has gone wrong');
        $v = new Validator();
        $this->form->userLogin = $v->validateFromPost('userLogin', [
            'trim' => true,
           'required' => true,
            'required_message' => 'You need to provide a login',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'The login should be between 2 and 20 characters long!'
        
        ]);
        $this->form->userRole = $v->validateFromPost('UserRole', [
            'trim' => true,
           'required' => true,
            'required_message' => 'You need to provide an role',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'The role should be between 2 and 20 characters long!'
        
        ]);
        $this->form->userDescription = $v->validateFromPost('UserDescription', [
            'trim' => true,
            'required' => true,
            'required_message' => 'You need to provide a description',
            'min_length' => 2,
            'max_length' =>100,
            'validator_message' => 'The description should be between 2 and 100 characters long!'
        ]);
        $this->form->UserAvatarPath = $v->validateFromPost('UserAvatarPath', [
             'trim' => true,
            'required' => true,
            'required_message' => 'You need to provide a path',
            'min_length' => 2,
            'max_length' =>100,
            'validator_message' => 'The description should be between 2 and 100 characters long!'
        ]);
            return !App::getMessages()->isError();
        }
   
    public function validateEdit() {
        $this->form->userId = ParamUtils::getFromPost('idperson');
        return !App::getMessages()->isError();
}
public function action_userEdit() {
    $this->form->userId = ParamUtils::getFromPost('idperson');
    if ($this->validateEdit()) {
        try {
            $record = App::getDB()->get("user", "*", [
                "idUser" => $this->form->userId
            ]);
            //Jesli istnieje taka osoba, wpisz dane do formularza
            $this->form->id = $record['idUser'];
            $this->form->userLogin = $record['UserLogin'];
            $this->form->UserAvatarPath = $record['UserAvatarPath'];
             $this->form->UserDescription  = $record['UserDescription'];
             $this->form->UserRole = $record['UserRole'];
        } catch (Exception $ex) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());            
        }
    }
        $this->generateView();
        }
    public function action_userSave(){
        if ($this->validateSave()) {
            try {
            App::getDB()->update("user", [
                "idUser" =>  $this->form->id,
                "UserLogin" =>  $this->form->userLogin,
                "UserAvatarPath" => $this->form->UserAvatarPath,
                "UserDescription" => $this->form->UserDescription,
                "UserRole" => $this->form->userRole],[
                    "idUser" =>$this->form->id                       
                
            ]);     
            
            }catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            Utils::addInfoMessage('Saved succesfully!');
            $this->action_adminUsers();
        
            } else {
                $this->generateView();
            }
        
    }
    
    public function generateView() {
        App::getSmarty() ->assign('form', $this->form);
        App::getSmarty() ->display('AdminPanelUsersEdit.tpl');
    }
    public function action_userList() {
        $this->load_data();
        //App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('user', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('adminPanelUsersFullPage.tpl');
    }

    public function action_personListPart() {
        $this->load_data();
       // App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('people', $this->records);
        App::getSmarty()->display('adminPanelUsersTable.tpl');
    }
}
