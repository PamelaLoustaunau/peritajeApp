<?php

class UserModel{
    private $db;

   
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=peritaje;charset=utf8', 'root', '');
     }

    public function getUserByEmail($user){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email=?');
        $query->execute([$email]);
        $user = $query -> fetch(PDO::FETCH_OBJ);
        return $user;
    }
}