<?php
class AseguradoraView {


    public function showAseguradoras($aseguradoras){
        
        require_once "./templates/aseguradoras.phtml";



    }


    public function showSiniestrosByAseguradora($siniestrosAseguradora){

        require_once "./templates/listaSiniestrosAseguradora.phtml";


    }

    public function formAgregarAseguradora(){
        require_once "./templates/formAgregarAseguradora.phtml";

    }
}

?>


