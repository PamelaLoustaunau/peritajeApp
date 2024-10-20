<?php

class AuthView{
    private $user=null;
    
    public function showLogin($error = ''){
        require_once './templates/formLogin.phtml';
    }
}

