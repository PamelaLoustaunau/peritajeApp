<?php
require_once "./app/models/aseguradora.model.php";
require_once "./app/views/aseguradora.view.php";

class AseguradoraController{
    private $model;
    private $view;

    public function __construct($res){
        $this->model = new AseguradoraModel();
        $this->view = new AseguradoraView($res->user);
    }


    public function getListAseguradoras(){
        $aseguradoras = $this->model->getAseguradoras();
        return $this -> view -> showAseguradoras($aseguradoras);
    }

    public function getAseguradoraId($id){
        $siniestrosAseguradora = $this->model->getsiniestrosAseguradoraId($id);
        return $this -> view -> showSiniestrosByAseguradora($siniestrosAseguradora);
    }

    public function getAgregarAseguradora(){
        
        return $this -> view -> formAddAseguradora();
    }

    public function getAseguradoraAdd(){
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $email = $_POST['email'];
        $id = $this->model->aseguradoraAdd($name, $adress, $email); 
        header('Location: ' . BASE_URL.'aseguradoras');
    }

    public function getAseguradoradelete($id){
        $this->model->deleteAseguradora($id);
        header('Location: ' . BASE_URL.'aseguradoras');

    }

    public function getAseguradoraModify($id){
        $aseguradora = $this->model-> modifyAseguradora($id);
        return $this -> view -> formModifyAseguradora($aseguradora);
    }

    public function getModifyAseguradora($id){
        $name = $_POST['name'];
        $adress = $_POST['adress'];
        $email = $_POST['email'];
         $this->model->aseguradoraModify($name, $adress, $email,  $id);
        header('Location: ' . BASE_URL.'aseguradoras');
    }

}
    
