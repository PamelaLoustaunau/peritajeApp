<?php
require_once "./app/models/aseguradora.model.php";
require_once "./app/views/aseguradora.view.php";

class AseguradoraController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new AseguradoraModel();
        $this->view = new AseguradoraView();

    }


    public function aseguradoras(){
        $aseguradoras = $this->model->getAseguradoras();
        return $this -> view -> showAseguradoras($aseguradoras);
    }
}