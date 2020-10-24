<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\UserEditForm;
use core\SessionUtils;


class mainCtrl {
    
    public function action_browseBands() {
	$records = App::getDB()->select("band",
            ["idBand","BandName","DateCreated","DateEnded"]
        );
         App::getSmarty()->assign("band", $records);
         App::getSmarty()->display("browseBands.tpl");	        
        
    }
    
    public function action_browseAlbums(){
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
         App::getSmarty()->display("browseAlbums.tpl");
    }
    public function action_browseLabels(){
        $records = App::getDB()->select("label",
        ["idLabel","LabelName","LabelCity|","LabelName","LabelCountry","LabelStreet","LabelPropertyNumber"]
                );
        
         App::getSmarty()->assign("label", $records);
         App::getSmarty()->display("browseLabels.tpl");
    }
    
     public function action_browseTracks(){
        $records = App::getDB()->select("track",
        [
           "[>]album" => ["Album_idAlbum"=>"idAlbum"],
            "[>]Band" => ["album.Band_idBand" =>"idBand"]
        ],
                [
                   "track.TrackName",
                   "album.AlbumName",
                   "band.BandName" 
                ] 
                );
        
         App::getSmarty()->assign("track", $records);
         App::getSmarty()->display("browseTracks.tpl");
    }    
  }
    

