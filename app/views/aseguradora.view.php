<?php
class AseguradoraView {

    private $user=null;
    
   
    public function __construct($user) {
        $this->user = $user;
    }
    
    public function showAseguradoras($aseguradoras){
        
        require_once "./templates/aseguradoras.phtml";
    }


    public function showSiniestrosByAseguradora($siniestrosAseguradora){

        require_once "./templates/listaSiniestrosAseguradora.phtml";

    }

    public function formAddAseguradora(){
        require_once "./templates/formAgregarAseguradora.phtml";

    }

    public function formModifyAseguradora($aseguradora){
        require_once "./templates/formModifyAseguradora.phtml";

    }
}

?>


