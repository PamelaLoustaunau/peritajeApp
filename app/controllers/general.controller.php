<?php
require_once "./app/views/general.view.php";

class GeneralController{
    private $view;

    public function __construct(){
        $this->view = new GeneralView();

    }
    public function getHome(){
        $this -> view -> showHome();
    }


}