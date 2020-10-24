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

/**
 * Description of adminCtrl
 *
 * @author Ewa
 */
class adminCtrl {
    public function action_admin() {
        App::getSmarty()->display("adminPanel.tpl");
    }
    public function action_adminUsers(){
        $records = App::getDB()->select("user",
            ["idUser","UserLogin","UserPassword","UserRole","UserAvatarPath","UserDescription"]
        );
         App::getSmarty()->assign("user", $records);
         App::getSmarty()->display("adminPanelUsers.tpl");
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
         App::getSmarty()->display("adminPanelComments.tpl");
    }
    public function action_adminBands() {
        $records = App::getDB()->select("band",
            ["idBand","BandName","DateCreated","DateEnded"]
        );
         App::getSmarty()->assign("band", $records);
         App::getSmarty()->display("adminPanelBands.tpl");
    }
    public function action_userDelete() {
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("person", [
                    "idperson" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('personList');
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
