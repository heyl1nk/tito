<?php

class User{
    private $user;
    private $password;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function login(){
        $user = $this->getUser();
        $password = $this->getPassword();
        $result = false;
        $sql = "SELECT * FROM usuarios WHERE usuario = '$user'";
        $login = $this->db->query($sql);
  
        if ($login && $login->num_rows == 1) {
            $usuario = $login->fetch_object();
            $result = $usuario;
        }
        return $result;
    }
}