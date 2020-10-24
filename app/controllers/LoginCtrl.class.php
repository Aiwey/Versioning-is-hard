<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;
use core\SessionUtils;
use core\Messages;
use app\forms\LoginForm;
use app\forms\RegisterForm;
use app\transfer\User;

class LoginCtrl {
        
   private $log;
   private $reg;
    
    public function __construct(){  
        
        $this->log = new LoginForm(); 
        $this->reg = new RegisterForm();
               
    }
    

    
public function validateRegister(){
               
        $this->reg->login = ParamUtils::getFromRequest('login',true,'Incorrect Call');
        $this->reg->password = ParamUtils::getFromRequest('password',true,'Incorrect Call');

        $v = new Validator();
        $v->validateFromRequest("login", 
                [
                    'trim' => true,
                    'required' => true,
                    'required_message' => 'Input login',
                    'min_length' => 2,
                    'max_length' => 10,
                    'validator_message' => 'Your login  2-10 characters long'
                ]);

        $v->validateFromRequest("password", 
                [
                    'trim' => true,
                    'required' => true,
                    'required_message' => 'Input password',
                    'min_length' => 5,
                    'max_length' => 30,
                    'validator_message' => 'Your password has to be 5-30 characters long.'
                ]);
        return !App::getMessages()->isError();
    }

    
public function validateLogin(){
               
        $this->log->login = ParamUtils::getFromRequest('login',true,'Incorrect Call');
        $this->log->password = ParamUtils::getFromRequest('password',true,'Incorrect Call');
        
        $v = new Validator();
        $v->validateFromRequest("login", 
                [
                    'trim' => true,
                    'required' => true,
                    'required_message' => 'Input login',
                    'min_length' => 2,
                    'max_length' => 10,
                    'validator_message' => 'Your login  2-10 characters long'
                ]);

        $v->validateFromRequest("password", 
                [
                    'trim' => true,
                    'required' => true,
                    'required_message' => 'Input password',
                    'min_length' => 5,
                    'max_length' => 30,
                    'validator_message' => 'Your password has to be 5-30 characters long.'
                ]);
        //==============Looking up the data in DB
        try{
        $loginExists = App::getDB()->count("user",[
                "UserLogin" => $this->log->login,                 
                ]);        
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Something went wrong while downloading data');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());
        }}
        
        try{
        $passwordExists = App::getDB()->count("user",[
                "UserPassword" => $this->log->password,                 
                ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Something went wrong while downloading data');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());
        }} 
            
            if ($loginExists==0){
                Utils::addErrorMessage('Wrong login. Typo?');
        }
            if ($passwordExists==0){
                Utils::addErrorMessage('Wrong password. Typo?');
        }
       if ($this->log->login == "admin" && $this->log->password == "admin") {
                            
				
				$user = new User($this->log->login, 'admin');
				// zaipsz obiekt użytkownika w sesji
				$_SESSION['user'] = serialize($user);
				// dodaj rolę użytkownikowi (jak wiemy, zapisane też w sesji)
				RoleUtils::addRole('admin');

			} else {

				//sesja już rozpoczęta w init.php, więc działamy ...
				$user = new User($this->log->login, 'user');
				// zaipsz obiekt użytkownika w sesji
				$_SESSION['user'] = serialize($user);
				// dodaj rolę użytkownikowi (jak wiemy, zapisane też w sesji)
				RoleUtils::addRole('user');

			}

            
        return !App::getMessages()->isError();
}


public function action_register(){
    if ($this->validateRegister()) { 
        try {
        App::getDB()->insert("user",[
            "UserLogin" => $this->reg->login,
            "UserPassword" => $this->reg->password,                 
        ]); 
        } catch (\PDOException $e){
            Utils::addErrorMessage('Something has gone wrong during signing up.');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());
        }}
        Utils::addInfoMessage('Your account has been created succesfully. Log in to fully experience the serenity.');
        App::getRouter()->redirectTo("showLogin");
        } else {
            $this->generateViewRegister();
        }

    }
public function action_login(){
    
        if ($this->validateLogin()){            
        RoleUtils::addRole('user');        
        Utils::addInfoMessage('Logged in successfully');
        $id = App::getDB()->get("user","idUser",[
            "UserLogin" => $this->log->login,
        ]);
        SessionUtils::store("idUser", $id);
        App::getRouter()->redirectTo("homepage");
        
        } else {
            $this->generateViewLogin();
        }
        
        }

    
public function generateViewLogin() {
        App::getSmarty()->assign('log', $this->log); // form data for the view
        App::getSmarty()->display('LoginPage.tpl');
        
    }
    
    
public function generateViewRegister() {
        App::getSmarty()->assign('reg', $this->reg); // form data for the view
        App::getSmarty()->display('RegisterPage.tpl');
        
    }



public function action_loginShow(){
        
        $this->generateViewLogin();
        
    }

    
public function action_registerShow(){
        
        $this->generateViewRegister();
        
    }

    
public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        if(RoleUtils::inRole("user")){
        
            unset($_SESSION);
            session_regenerate_id(true);
            RoleUtils::removeRole("user");
            App::getRouter()->redirectTo('homepage');
        }
        else if (RoleUtils::inRole("admin")){
           
            unset($_SESSION);
            RoleUtils::removeRole("admin");
            App::getRouter()->redirectTo('homepage'); 
        }
        else
            session_destroy();
        unset($_SESSION);
            session_regenerate_id(true);
        
    }
    }