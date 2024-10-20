<?php

class AuthView{
    private $user=null;
    
    public function showLogin(){
        require_once './templates/formLogin.phtml';
    }
}

