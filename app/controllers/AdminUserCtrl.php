<?php

namespace app\controllers;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\UserEditForm;

class AdminUserCtrl {
    private $form;
     public function __construct() {
        $this->form = new UserEditForm();
    }
      public function action_adminUsers(){
     $this->generateAdminUsers();
    }
    public function generateAdminUsers() {
           $records = App::getDB()->select("user",
            ["idUser","UserLogin","UserPassword","UserRole","UserAvatarPath","UserDescription"]
        );
         App::getSmarty()->assign("user", $records);
         App::getSmarty()->display("adminPanelUsers.tpl");
    }
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

}
