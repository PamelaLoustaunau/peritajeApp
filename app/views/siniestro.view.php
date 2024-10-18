<link rel="stylesheet" href="./style/style.css">

<?php
class SiniestroView {

    public function showSiniestros($siniestros) {
        echo "<h1>Siniestros</h1>
        <div class='accordion'>";
        
        // Recorrer el array utilizando tanto la key como el objeto siniestro

        foreach ($siniestros as $key => $siniestro) {
            echo "
                <button class='accordion-btn' id='accordion-btn-$key'>
                    Nombre y Apellido: $siniestro->Asegurado - Fecha: $siniestro->Fecha
                </button>
                <div class='accordion-content' id='accordion-content-$key'>
                    <p>ID del Siniestro: $siniestro->ID_Siniestro</p>
                    <p>Descripción: $siniestro->Tipo_Siniestro</p>
                    <p>ID de la Aseguradora: $siniestro->ID_Aseguradora</p>

                </div>";
        }
        
        echo "</div>
              <div class='btn-back'>
                  <button id='back'>Atrás</button>
              </div>";
    }
    
}
?>
<script src="./js/home.js"></script>
