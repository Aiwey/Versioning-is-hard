<?php 
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\TrackSearchForm;
use core\SessionUtils;

class trackListCtrl{
    private $form; //search form data
    private $records; // DB data
    
    public function __construct() {
        $this->form = new TrackSearchForm;
    }
    
    public function validate(){
        $this->form->trackName = ParamUtils::getFromRequest('sf_trackname');
        SessionUtils::store("searchPhrase", $this->form->trackName);
        return !App::getMessages()->isError();
    }
    
    public function action_trackList(){
        $size = 3;
        $page = ParamUtils::getFromCleanUrl(1);
        $this->validate();
        if($page!==1){ 
            $this->form->trackName=SessionUtils::load("searchPhrase",$keep=true);
        }
        
        $offset=$size*($page-1);
        
        if(isset($this->form->trackName) && strlen($this->form->trackName)>0){
            try {
                $max = App::getDB()->count("track",[
                 "TrackName[~]"=>$this->form->trackName   
                ]);
            } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
        Utils::addErrorMessage($e->getMessage());}
        try {
            $this->records = App::getDB() ->select("track",[
                "idTrack","TrackName"],[
                    "trackName[~]"=>$this->form->trackName,
                    "LIMIT"=>[$offset,$size]
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());}
            $max_page=ceil($max/$size);
            App::getSmarty() ->assign('max',$max);
            App::getSmarty()->assign('max_page',$max_page);
            App::getSmarty()->assign('page', $page);
            App::getSmarty()->assign('offset', $offset);
            App::getSmarty()->assign('size', $size);
            App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
            App::getSmarty()->assign('track', $this->records);  // lista rekordów z bazy danych
            App::getSmarty()->display('TrackList.tpl');
            } else App::getRouter ()->redirectTo('homepage');
        
    
 // 4. wygeneruj widok
        
    }
}
