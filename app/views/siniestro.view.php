
<?php
class SiniestroView {

    public function showSiniestros($siniestros) {
        require_once "./templates/siniestros.phtml";
    }

    public function formAddSiniestro(){
    
        require_once "./templates/formAgregarSiniestro.phtml";

    }

    public function formModifyiniestro($siniestro){
        require_once "./templates/formModifySiniestro.phtml";

    }
    
}
?>
