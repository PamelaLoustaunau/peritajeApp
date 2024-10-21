
<?php
class SiniestroView {
    private $user=null;

    public function __construct(/*$user*/) {
       // $this->user = $user;
    }

    public function showSiniestros($siniestros) {
        require_once "./templates/siniestros.phtml";
    }
    public function showSiniestroByAseguradora($siniestroAseguradoras){
        require_once "./templates/listaIdAseguradoras.phtml";

    }


    public function formModifyiniestro($siniestro){
        require_once "./templates/formModifySiniestro.phtml";
    }
    
}
?>
