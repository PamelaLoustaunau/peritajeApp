<?php
require_once "./app/models/siniestro.model.php";
require_once "./app/views/siniestro.view.php";

class SiniestroController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new SiniestroModel();
        $this->view = new SiniestroView();

    }



    public function getListSiniestros(){
        $siniestros = $this->model->getSiniestros();
        return $this -> view -> showSiniestros($siniestros);
    }

    /*public function getSiniestroID(){
        $siniestroID= $this->model->getBySiniestro()
        return $this->view->s
    }*/




     
}