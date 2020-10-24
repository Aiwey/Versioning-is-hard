<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;



/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class HomepageCtrl {
    
    public function action_homepage() {
		        
        $variable = 1323;
        
      
        
            
        App::getSmarty()->assign("value",$variable);        
        App::getSmarty()->display("homepage.tpl");
        
        
    }
    
}
