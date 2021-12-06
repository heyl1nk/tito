<?php

require_once 'models/user.php';

class principalController{
  
    public function index(){
        if(!Utils::isLogged()){
            header("Location:".base_url."user/index");
        }
        require_once 'views/principal.php';
    }
}