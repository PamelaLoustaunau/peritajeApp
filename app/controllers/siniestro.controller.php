<?php
require_once "./app/models/siniestro.model.php";
require_once "./app/views/siniestro.view.php";

class SiniestroController{
    private $model;
    private $view;

    public function __construct($res){
        $this->model = new SiniestroModel();
        $this->view = new SiniestroView($res->$user);

    }


    public function getListSiniestros(){
        $siniestros = $this->model->getSiniestros();
        return $this -> view -> showSiniestros($siniestros);
    }

    public function getAgregarSiniestro(){
        
        return $this -> view -> formAddSiniestro();
    }

    public function getSiniestroAdd(){
        $aseguradora = $_POST['aseguradora'];
        $date = $_POST['date'];
        $typeSiniestro = $_POST['typeSiniestro'];
        $asegurado = $_POST['name'];
        
        $id = $this->model->siniestroaAdd($date, $typeSiniestro, $asegurado, $aseguradora); 
        header('Location: ' . BASE_URL.'siniestros');
    }

    public function getsiniestrodelete($id){
        $this->model->deleteSiniestro($id);
        header('Location: ' . BASE_URL.'siniestros');

    }

    public function getSiniestroModify($id){
        $siniestro = $this->model-> modifySiniestro($id);
        return $this -> view -> formModifyiniestro($siniestro);
    }

    public function getModifySiniestro($id){
        $date = $_POST['date'];
        $typeSiniestro = $_POST['typeSiniestro'];
        $asegurado = $_POST['asegurado'];
        $this->model->siniestroModify($date, $typeSiniestro, $asegurado,  $id);
        header('Location: ' . BASE_URL.'siniestros');

    }








     
}