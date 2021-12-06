<?php

require_once 'models/user.php';

class userController{

    /*CARGA LA VISTA DEL LOGIN SI NO ESTA USER CONECTADO */ 
    public function index(){
        if (Utils::isLogged()) {
            header("Location:" . base_url . "principal/index");
        }
        require_once 'views/login.php';
    }
    /* INICIA SESION */
    public function login(){
        if (Utils::isLogged()) {
            header("Location:" . base_url . "principal/index");
        }
        if($_POST){
            $usr = new User();
            $usr->setUser($_POST['user']);
            $usr->setPassword($_POST['password']);
            $identity = $usr->login();
            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
            }else{
                $_SESSION['error_login'] = 'No se encuentra el usuario';
            }
        }
        if (isset($_SESSION['identity'])) {
            header("Location:" . base_url . "principal/index");
        } else {
            header("Location:" . base_url);
        }
    }  
  /* CIERRA SESION */ 
    public function logout(){
        if (isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
        header("Location:" . base_url);
    }

}